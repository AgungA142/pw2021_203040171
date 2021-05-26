<?php

function koneksi() {
    return mysqli_connect('localhost', 'root','' , 'pw_203040171');
}

function query($query) {
    $conn = koneksi();

    $result =mysqli_query($conn, $query);

    //jika hasilnya hanya 1 data

    if (mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    }

    $rows = [];
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}
return $rows;
}





function tambah($data)
{
    $conn= koneksi();

    $nama = htmlspecialchars($data['nama']);
    $nrp = htmlspecialchars($data['nrp']);
    $email = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']);
    $img = htmlspecialchars($data['img']);

    $query = "INSERT INTO mahasiswa VALUES(null,'$img', '$nrp', '$nama', '$email', '$jurusan')";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}


function hapus($id) {
    $conn = Koneksi();
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}


function ubah($data)
{
    $conn= koneksi();

    $id = $data['id'];
    $nama = htmlspecialchars($data['nama']);
    $nrp = htmlspecialchars($data['nrp']);
    $email = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']);
    $img = htmlspecialchars($data['img']);

    $query = "UPDATE mahasiswa SET
                    img = '$img',
                    nrp = '$nrp',
                    nama = '$nama',
                    email = '$email',
                    jurusan = '$jurusan'
                    WHERE id = $id ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $conn = Koneksi();

    $query = "SELECT * FROM mahasiswa WHERE nama LIKE '%$keyword%' OR nrp LIKE '$keyword'";


    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
    } 



function login($data) {
    $conn = Koneksi();

    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);
    //cek username
    if ($user = query("SELECT * FROM user WHERE username ='$username'")) {
        //cek password
        if(password_verify($password, $user['password'])) {
            //set session

        $_SESSION['login'] = true;
        header("Location: index.php");
        exit;
        }
 
    }
        return [
            'error' => true,
            'pesan' => 'username/password salah!'
        ];
}



function registrasi($data)
{
    $conn = Koneksi();

    $username = htmlspecialchars(strtolower($data['username']));
    $password1 = mysqli_real_escape_string($conn, $data['password1']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);

    //jika username/password kosong
    if(empty($username) || empty($password1) || empty($password2)) {
        echo "<script>
                alert('username / password tidak boleh kosong!');
                document.location.href = 'register.php';
            </script>";
        return false;
    }

    //jika username sudah ada
    if(Query("SELECT * FROM user WHERE username = '$username'")) {
        echo "<script>
                alert('username sudah terdaftar!');
                document.location.href = 'register.php';
            </script>";
        return false;
    }

    //jika konfirmasi password tidak sesuai
    if($password1 !== $password2) {
        echo "<script>
                alert('Konfimasi password tidak sesuai!');
                document.location.href = 'register.php';
            </script>";
        return false;
    }

    //jika password < 5 digit
    if(strlen($password1) < 5) {
        echo "<script>
                alert('Password Terlalu pendek!');
                document.location.href = 'register.php';
            </script>";
            return false;
    }

    //jika username dan password sudah sesuai
    //enkripsi password

    $password_baru = password_hash($password1, PASSWORD_DEFAULT);
    //insert ke tabel user
    $query = "INSERT INTO user 
                VALUES
                (null,'$username','$password_baru')";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

?>
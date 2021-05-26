<?php 
function koneksi() {
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040171");

    return $conn;
}

function query($sql) {
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function upload() {
   $nama_file = $_FILES['pict']['name'];
   $tipe_file = $_FILES['pict']['type'];
   $ukuran_file = $_FILES['pict']['size'];
   $error = $_FILES['pict']['error'];
   $tmp_file = $_FILES['pict']['tmp_name'];

   //ketika tidak ada gambar
   if($error == 4) {

    return 'nophoto.png';
   }

   //cek ekstensi file 
   $daftar_gambar = ['jpg', 'jpeg', 'png'];
   $ekstensi_file = explode('.', $nama_file);
   $ekstensi_file = strtolower(end($ekstensi_file));
   if (!in_array($ekstensi_file, $daftar_gambar)) {
    echo "<script>
    alert('wrong file upload, please try again!');
 </script>";
 return false;
   }

   //cek tipe file
   if($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
    echo "<script>
    alert('wrong file upload, please try again!');
 </script>";
 return false;
   }

   //cek ukuran file
   if($ukuran_file >10000000) {
    echo "<script>
    alert('File size too big, please upload another file');
 </script>";
 return false;
   }

   //upload file
   $nama_file_baru = uniqid();
   $nama_file_baru .= '.';
   $nama_file_baru .= $ekstensi_file;
   move_uploaded_file($tmp_file, 'img/' . $nama_file_baru);

   return $nama_file_baru;
}


function add($data) {
    $conn = koneksi();

    $nama = htmlspecialchars($data['nama']);
    $harga = htmlspecialchars($data['harga']);
    $stock = htmlspecialchars($data['stock']);
    $size = htmlspecialchars($data['size']);
    // $pict = htmlspecialchars($data['pict']);

    //upload
    $pict = upload();
    if (!$pict) {
        return false;
    }

    $query = "INSERT INTO shoes
                VALUES
                ('','$nama','$size','$harga','$stock','$pict')";
    

    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);

}


function hapus($id) {
    $conn = koneksi();
    //menghapus gambar di folder
 $shoes = query("SELECT * FROM shoes WHERE id =$id");
 error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
 if($shoes['pict'] != 'nophoto.png') {
     unlink('img/' . $shoes['pict']);
    
 }
 

    mysqli_query($conn, "DELETE FROM shoes WHERE id =$id");

    return mysqli_affected_rows($conn);
}



function ubah($data) {
    $conn = koneksi();

    $id = htmlspecialchars($data['id']);
    $nama = htmlspecialchars($data['nama']);
    $harga = htmlspecialchars($data['harga']);
    $stock = htmlspecialchars($data['stock']);
    $size = htmlspecialchars($data['size']);
    $gambar_lama = htmlspecialchars($data['gambar_lama']);

    $pict = upload();
    if (!$pict) {
        return false;
    }

    if ($pict == 'nophoto.png') {
        $pict = $gambar_lama;
    }

    $query = "UPDATE shoes SET
            nama ='$nama',
            harga ='$harga',
            stock = '$stock',
            size = '$size',
            pict = '$pict'
            WHERE id = '$id'
    ";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}




function registrasi($data) {
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password1 = mysqli_real_escape_string($conn, $data["password1"]);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);

    //jika username/password kosong
    if(empty($username) || empty($password1) || empty($password2)) {
        echo "<script>
                alert('username / password tidak boleh kosong!');
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


    $result = mysqli_query($conn, "SELECT username FROM user WHERE username ='$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
        alert('your username is already used');
    </script>";
    return false;
    }

    $password = password_hash($password1, PASSWORD_DEFAULT);

    $query_tambah = "INSERT INTO user VALUES ('', '$username', '$password')";
    mysqli_query($conn, $query_tambah) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}









?>



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


function add($data) {
    $conn = koneksi();

    $nama = htmlspecialchars($data['nama']);
    $harga = htmlspecialchars($data['harga']);
    $stock = htmlspecialchars($data['stock']);
    $size = htmlspecialchars($data['size']);
    $pict = htmlspecialchars($data['pict']);

    $query = "INSERT INTO shoes
                VALUES
                ('','$nama','$size','$harga','$stock','$pict')";
    

    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);

}


function hapus($id) {
    $conn = koneksi();
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
    $pict = htmlspecialchars($data['pict']);

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
    $password = mysqli_real_escape_string($conn, $data["password"]);


    $result = mysqli_query($conn, "SELECT username FROM user WHERE username ='$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
        alert('your username is already used');
    </script>";
    return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $query_tambah = "INSERT INTO user VALUES ('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}









?>



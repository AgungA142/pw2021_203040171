<?php
session_start();

if(!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
require 'function.php';

//cek apakah tombol sudah ditekan
if(isset($_POST['tambah'])){
    if(tambah($_POST) > 0) {
        echo "<script>
        alert('Data berhasil ditambahkan!');
        document.location.href = 'index.php';
    </script>";;
    }else {
        echo "data gagal ditambahkan!";
    }
}





?>
















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data mahasiswa</title>
</head>
<body>
    <h3>form tambah data mahasiswa</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="">
                    NRP :
                    <input type="text" name="nrp" required>
                </label>
            </li>
            <li>
                <label for="">
                    Nama :
                    <input type="text" name="nama" required>
                </label>
            </li>
            <li>
                <label for="">
                    Email :
                    <input type="text" name="email" required>
                </label>
            </li>
            <li>
                <label for="">
                    Jurusan:
                    <input type="text" name="jurusan" required>
                </label>
            </li>
            <li>
                <label for="">
                    Img :
                    <input type="file" name="img" class="gambar" onchange="previewImage()">
                </label>
                <img src="img/nophoto.png" width="120" style="display: block;" alt="" class="img-preview">
            </li>
            <li><button type="submit" name="tambah">Tambah Data!</button></li>
        </ul>
    
    </form>

    <script src="js/script.js"></script>
</body>
</html>
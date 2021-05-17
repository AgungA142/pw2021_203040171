<?php
/*
agung alfatah
203040171
https://github.com/AgungA142/pw2021_203040171
Pertemuan 11 - 5 mei 2021
belajar mengenai Variabel superglobal dan variabel scope dan cara penggunaan request $_GET
*/
?>



<?php
session_start();

if(!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}


require 'function.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

if(isset($_POST['cari'])) {
    $mahasiswa = cari($_POST['keyword']);
}

?>




















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftar mahasiswa</title>
</head>
<body>
    <a href="logout.php"> logout</a>
    <h3>Daftar mahasiswa</h3>

    <a href="tambah.php">Tambahkan data mahasiswa</a>
    <br><br>


    <form action="" method="POST">
        <input type="text" name="keyword" size="40" placeholder="masukan keyword pencarian" autocomplete="off" autofocus>
        <button type="submit" name="cari">cari!</button>
    
    </form>
    <br>


    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>#</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>Aksi</th>
    </tr>

    <?php if(empty($mahasiswa)) : ?> 
    <tr>
        <td colspan="4"><p style="color :red; font-style:italic;">data mahasiswa tidak ditemukan!</p></td>
    </tr>
    <?php endif;?> 
   <?php $i=1;foreach($mahasiswa as $m) : ?> 
    <tr>
        <td><?=$i++?></td>
        <td><img src="img/<?= $m['img']?>" width="60" alt=""></td>
        <td><?= $m['nama']?></td>
        <td><a href="detail.php?id=<?= $m['id'];?>" >lihat detail</a> 
    
    
    
    </tr>
    <?php endforeach; ?>
    </table>
</body>
</html>
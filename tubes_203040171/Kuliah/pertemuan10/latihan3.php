<?php
/*
agung alfatah
203040171
https://github.com/AgungA142/pw2021_203040171
Pertemuan 10 - 11 maret 2021
belajar mengenai Variabel superglobal dan variabel scope dan cara penggunaan request $_GET
*/
?>



<?php
require 'function.php';

$mahasiswa = query("SELECT * FROM mahasiswa");


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
    <h3>Daftar mahasiswa</h3>


    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>#</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>Aksi</th>
    </tr>
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
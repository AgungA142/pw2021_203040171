<?php
$nama_pemain_bola = [
    "Mohammad Salah",
    "Cristiano ronaldo",
    "Lionel Messi",
    "Zlatan Ibrahimovic",
    "Neymar Jr"
];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .kotak {
        border: 2px solid black;
        width: 50%;
        font-weight: bold;
    }
    
    
    
    </style>
</head>
<body>
    <div class="kotak"> Daftar Pemain bola terkenal
        <ol> 
            <li><?= $nama_pemain_bola[0]; ?></li>
            <li><?= $nama_pemain_bola[1]; ?></li>
            <li><?= $nama_pemain_bola[2]; ?></li>
            <li><?= $nama_pemain_bola[3]; ?></li>
            <li><?= $nama_pemain_bola[4]; ?></li>
        </ol>
       <div>Daftar pemain bola terkenal baru</div> 
        <ol> 
            <li><?= $nama_pemain_bola[1]; ?></li>
            <li><?= $nama_pemain_bola[2]; ?></li>
            <li><?= $nama_pemain_bola[]= "Luca Modric"; ?></li>
            <li><?= $nama_pemain_bola[0]; ?></li>
            <li><?= $nama_pemain_bola[4]; ?></li>
            <li><?= $nama_pemain_bola[]= "Sadio Mane"; ?></li>
            <li><?= $nama_pemain_bola[3]; ?></li>
        </ol>
    </div>


</body>
</html>
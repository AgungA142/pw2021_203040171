<?php
$nama_pemain_bola = [
    "Cristiano ronaldo" => "Juventus" ,
    "Lionel Messi" =>"Barcelona",
    "Luca Modric" => "Real Madrid" ,
    "Mohammad Salah" => "Liverpool" ,
    "Neymar Jr" => "Paris Saint German" ,
    "Sadio Mane" => "Liverpool" ,
    "Zlatan Ibrahimovic"  => "Ac Milan",
    
    
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
    <div class="kotak">Daftar nama Pemain bola dan Clubnya
        <?php foreach($nama_pemain_bola as $nama => $club) : ?>
            <li><?= "$nama : $club" ?></li>
        <?php endforeach; ?>
    </div>
</body>
</html>
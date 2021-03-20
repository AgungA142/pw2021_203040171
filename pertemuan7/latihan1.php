<?php
/*
agung alfatah
203040171
https://github.com/AgungA142/pw2021_203040171
Pertemuan 5 - 11 maret 2021
belajar mengenai Variabel superglobal dan variabel scope dan cara penggunaan request $_GET
*/
?>

<?php 
//variabel scope/ lingkup variabel
//variabel superglobal
//$_GET = URL
//$_POST = form
//$_REQUEST
//$_SESSION
//$_COOKIE
//$_SERVER
//$_ENV
//Semua variabel superglobal ini merupakan array assosiative
//$_GET
$gacha =[
    [
        "Nama" =>"Gacha Character",
        "Pity" =>"49",
        "Game" =>"Genshin Impact",
        "Date" =>"7 maret 2021",
        "gambar" =>"gacha1.png"
    ],
    
    [
        "Nama" =>"Gacha Waepon",
        "Pity" =>"41",
        "Game" =>"Genshin Impact",
        "Date" =>"11 maret 2021",
        "gambar" =>"gacha2.png"
    ]
    ];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Riwayat Gacha</h1>
    <ul>
    <?php foreach($gacha as $g): ?>
        <li>
        <a href="latihan2.php?nama=<?= $g["Nama"]; ?>&pity=<?= $g["Pity"];?>&game=<?= $g["Game"];?>&date=<?= $g["Date"]?>&gambar=<?= $g["gambar"]?>"><?= $g["Nama"]?></a>
        </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>
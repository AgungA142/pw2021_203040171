<?php
/*
agung alfatah
203040171
https://github.com/AgungA142/pw2021_203040171
Pertemuan 5 - 11 maret 2021
belajar mengenai assoiactive array dan cara penggunannya
*/
?>

<?php
$gacha =[
[
    "Nama" =>"Gacha Character",
    "Pity" =>"49",
    "Game" =>"Genshin Impact",
    "Date" =>"7 maret 2021",
    "gambar" =>"gacha1.png"
],

[
    "Nama" =>"gacha Waepon",
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
    <h1>History Gacha</h1>

    <?php foreach($gacha as $g) : ?>
        <ul>
            <li>
                <img src="img/<?= $g["gambar"] ?>" alt="" width="200px">
            </li>
            <li>Nama : <?= $g["Nama"] ?></li>
            <li>Pity : <?= $g["Pity"] ?></li>
            <li>Game : <?= $g["Game"] ?></li>
            <li>Date : <?= $g["Date"] ?></li>
        </ul>
    <?php endforeach; ?>    
</body>
</html>
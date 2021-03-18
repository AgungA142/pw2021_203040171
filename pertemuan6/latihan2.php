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
$mahasiswa =[
[
    "Nama" =>"Agung A",
    "Nrp" =>"203040171",
    "Email" =>"agung.alfatah43@gmail.com",
    "Jurusan" =>"Teknik Informatika",
    "gambar" =>""
],

[
    "Nama" =>"Sendi",
    "Nrp" =>"203040041",
    "Email" =>"sendi44@gmail.com",
    "Jurusan" =>"Teknik Industri",
    "gambar" =>""
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
    <h1>Daftar Mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"] ?>" alt="">
            </li>
            <li>Nama : <?= $mhs["Nama"] ?></li>
            <li>NRP : <?= $mhs["Nrp"] ?></li>
            <li>Jurusan : <?= $mhs["Jurusan"] ?></li>
            <li>Email : <?= $mhs["Email"] ?></li>
        </ul>
    <?php endforeach; ?>    
</body>
</html>
<?php
/*
agung alfatah
203040171
https://github.com/AgungA142/pw2021_203040171
Pertemuan 5 - 11 maret 2021
belajar mengenai array multidimensi
*/

?>

<?php
$mahasiswa =[
    ["Agung Alfatah", "203040171", "teknik informatika","agung.alfatah@unpas.ac.id"],
    ["Doddy Ferdiansyah", "03304001", "Teknik Industri","doddy@yahoo.com"],
    ["Erik","023040123","Teknik Planologi","erik@gmail.com"]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>

<?php foreach($mahasiswa as $mhs) :?>
<ul>
    <li>nama : <?=  $mhs[0];?></li>
    <li>NRP : <?=  $mhs[1];?></li>
    <li>Jurusan : <?=  $mhs[2];?></li>
    <li>Email : <?=  $mhs[3];?></li>
    
</ul>
<?php endforeach; ?>
</body>
</html>
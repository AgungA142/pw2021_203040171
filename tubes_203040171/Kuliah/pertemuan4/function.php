<?php 
/*
agung alfatah
203040171
https://github.com/AgungA142/pw2021_203040171
Pertemuan 4 - 5 maret 2021
belajar mengenai membuat function kita sendiri
*/
?>


<?php 
function salam($waktu = "Datang", $nama = "Admin") {
    return "Selamat $waktu, $nama!";
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan function</title>
</head>
<body>
    <h1><?php echo salam("pagi", "Agung") ?></h1>
</body>
</html>
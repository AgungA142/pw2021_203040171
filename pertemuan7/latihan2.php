<?php
/*
agung alfatah
203040171
https://github.com/AgungA142/pw2021_203040171
Pertemuan 5 - 11 maret 2021
belajar mengenai mengambil data $_GET dari latihan1 dan redirect kembali ke latihan 1 apabila ada yang mengakses file latihan 2 melalui url
*/
?>



<?php
// cek apakah tidak ada data di $_GET
if (!isset($_GET["nama"]) ||
    !isset($_GET["pity"])||
    !isset($_GET["game"])||
    !isset($_GET["date"])||
    !isset($_GET["gambar"])) {
    //redirect
    header("Location: latihan1.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Gacha</title>
</head>
<body>


    <ul>
        <li><img src="img/<?= $_GET["gambar"]; ?>" alt="" width="200px"></li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["pity"]; ?></li>
        <li><?= $_GET["game"]; ?></li>
        <li><?= $_GET["date"]; ?></li>
    </ul>

    <a href="latihan1.php">kembali ke halaman awal</a>
</body>
</html>
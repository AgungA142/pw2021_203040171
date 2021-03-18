<?php

$nama_pemain_bola = [
    [
        "nama" => "Cristiano Ronaldo",
        "klub" => "Juventus",
        "main" => 100,
        "gol" => 76,
        "assist" => 30
    ],
    [
        "nama" => "Lionel Messi",
        "klub" => "Barcelona",
        "main" => 120,
        "gol" => 80,
        "assist" => 12
    ],
    [
        "nama" => "Luca Modric",
        "klub" => "Real Madrid",
        "main" => 87,
        "gol" => 12,
        "assist" => 48
    ],
    [
        "nama" => "Mohammad Salah",
        "klub" => "Liverpool",
        "main" => 90,
        "gol" => 103,
        "assist" => 8
    ],
    [
        "nama" => "Neymar Jr",
        "klub" => "Paris Saint Germain",
        "main" => 109,
        "gol" => 56,
        "assist" => 15
    ],
    [
        "nama" => "Sadio Mane",
        "klub" => "Liverpool",
        "main" => 63,
        "gol" => 30,
        "assist" => 70
    ],
    [
        "nama" => "Zlatan Ibrahimovic",
        "klub" => "Ac Milan",
        "main" => 100,
        "gol" => 10,
        "assist" => 12
    ],
];

$total_main = 0;
$total_gol = 0;
$total_assist = 0;

foreach ($nama_pemain_bola as $item => $value) {
    $total_main += $value['main'];
    $total_gol += $value['gol'];
    $total_assist += $value['assist'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table,
        th,
        td {
            border-collapse: collapse;
            border: 2px solid black;
            font-weight: bold;
            text-align: justify;
        }

      
        
    </style>
</head>

<body>

    <h3><b>Daftar pemain bola terkenal dan clubnya</b></h3>
    <table>
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>CLUB</th>
            <th>MAIN</th>
            <th>GOL</th>
            <th>ASSIST</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($nama_pemain_bola as $pemain) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $pemain["nama"] ?></td>
                <td><?= $pemain["klub"] ?></td>
                <td><?= $pemain["main"] ?></td>
                <td><?= $pemain["gol"] ?></td>
                <td><?= $pemain["assist"] ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
        <tr>
            <th>#</th>
            <th colspan="2">
                <center>Jumlah</center>
            </th>
            <th><?= $total_main ?></th>
            <th><?= $total_gol ?></th>
            <th><?= $total_assist ?></th>
        </tr>
    </table>

</body>

</html>

    <?php

    $jawabanIsset = " Fungsi isset pada PHP adalah Fungsi isset () digunakan untuk memeriksa apakah suatu variabel sudah diatur atau belum. Fungsi isset () mengembalikan false jika variabel pengujian berisi nilai NULL. <br><br>";
    $jawabanEmpty = " Empty pada PHP berfungsi sebagai penanda suatu kondisi. Contohnya yang sering kita temukan adalah dalam pengisian suatu data. Tentu sebagai sang developer akan memikirkan tingkah laku kliennya. Seperti misalnya lupa mengisikan data atau ada yang terlewatkan. Dengan perintah empty ini, akan dicek apakah datanya sudah terisi atau malah kosong. Dengan kondisi seperti itu, kita bisa meminimalisir kesalahan klien. Sehingga apabila memang datanya kosong, maka akan dimunculkan peringatan atau sebagainya.";

    function soal($style)
    {
        global $jawabanIsset, $jawabanEmpty;
        echo $jawabanIsset, $jawabanEmpty;
        return $style;
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
    .css {
        border: 2px solid black;

    }
    </style>
</head>
<body>
    <div class="css"><?= soal("css")?></div>
</body>
</html>
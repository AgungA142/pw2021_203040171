<?php

    function gantiStyle($tulisan, $style1 = "style1", $style2 = "style2")
    {
        return "<div class=$style1><p class=$style2>$tulisan</p></div>";
    }

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2a</title>
    <style>
        .style1 {
            border: 2px solid black;
            box-shadow: 0 0 15px #000;
        }

        .style2 {
            font-size: 28px;
            font-family: arial;
            color: #8c782d;
            font-style: italic;
            font-weight: bolder;
        }

    </style>
</head>

<body>

<?= gantiStyle("Selamat datang di praktikum pw" ) ?>
    

</body>

</html>



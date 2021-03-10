<?php
function hitungdeterminan($a,$b,$c,$d) {
    echo "<table style='border-left:2px solid black; border-right:2px solid black;' cellpadding='5' cellspacing='5'>
        <tr>
            <td>$a</td>
            <td>$b</td>
        </tr>
        <tr>
            <td>$c</td>
            <td>$d</td>
        </tr>
    </table>";

    $determinan = (($a*$d)-($b*$c));
    return "Determinan dari matriks tersebut adalah $determinan";
}

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
    <?= hitungdeterminan(1,2,3,4)?>
</body>
</html>
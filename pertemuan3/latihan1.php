<?php
/*
agung alfatah
203040171
https://github.com/sacred142/pw2021_203040171
Pertemuan 3 - 25 februari 2021
belajar mengenai struktur kendali pengulangan dan penulisan templating
*/
?>

<?php
//pengulangan
//for
//while
//do...while
//foreach:pengulangan khusus array

//for( $i = 0; $i < 5; $i++) {
//   echo "Hello World! <br>";
//}
// $i = 10;
// while( $i < 5) {
//     echo "Hellow World! <br>";
// $i++;
// }
// $i= 10;
// do {
//     echo "Hello World! <br>";
// $i++;
// } while( $i < 5 )

/*
  <table border="1" cellpadding="10" cellspacing="0">
    <?php
     for( $i = 1; $i <= 3; $i++) {
         echo "<tr>";
         for( $j = 1; $j <= 5; $j++ ) {
             echo "<td>$i,$j</td>";
         }
         echo "</tr>";
     }
    ?>
    </table>
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
    .warna-baris {
        background-color:silver;
    }
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
    <?php for( $i = 1; $i <= 5; $i++) : ?>
    <?php if( $i % 2 == 1) :?>
    <tr class="warna-baris">
    <?php else :?>
    <tr></tr>
    <?php endif; ?>
    <?php for( $j= 1; $j <= 5; $j++) { ?>
    <td><?= "$i,$j"; ?></td>
    <?php }?>
    </tr> 
    <?php endfor; ?>
    </table>
</body>
</html>
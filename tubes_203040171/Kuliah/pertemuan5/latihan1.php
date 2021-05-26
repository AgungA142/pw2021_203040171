<?php 
/*
agung alfatah
203040171
https://github.com/AgungA142/pw2021_203040171
Pertemuan 5 - 11 maret 2021
belajar mengenai array
*/

?>


<?php 
//array
//variabel yang dapat memiliki banyak nilai
//elemen pada array boleh memiliki tipe data yang berbeda
//pasangan antara key dan value
//keynya adalah index yang dimulai dari 0

// membuat array
//cara lama
$hari = array("senin","selasa","rabu",);
// cara baru
$bulan =["Januari","Februari","Maret"];
$arr1 = [123,"tulisan",false];


// //menampilkan Array
// //var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);

// //menampilkan 1 elemen pada array

// echo $arr1[0];
// echo "<br>";
// echo $bulan[1]

//menambahkan elemen baru pada array
var_dump($hari);
$hari[]="kamis";
$hari[]="jumat";
echo "<br>";
var_dump($hari);
?>
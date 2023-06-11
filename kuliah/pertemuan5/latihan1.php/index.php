<?php 
// array
// membuat array

$hari = array ('senin', 'selasa', 'rabu');
$bulan = ['januari', 'februari', 'maret'];
$myArray = ['Rifqi', 18, false];
$binatang = ['🐕', '🦓', '🐈', '🐄', '🐏'];

//menampilkan isi array
//

echo $hari[1]
echo "<hr>";

//mencetak seluruh isi array
//mencetak satu elemen array menggunakan array

var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
var_dump($myArray);
echo "<br>";
print_r($binatang);
echo "<hr>";

//manipulasi isi array
//isi elemen menggunakan index

$hari[3] = 'kamis'


//menambahkan elemen di akhir array menggunakan index kosong []
$hari[]= "jum'at";
$hari[]= "sabtu";
print_r($hari);
echo "<br>";

//menambahkan elemen di akhir array menggunakan array_push()
array_push($bulan,'april','mei','juni','juli')
print_r($bulan);

//menghapus 

//menambahkan elemen baru di awal array menggunakan array_unshift
array_unshift($binatang, '🐇');
print_r($binatang);


?>
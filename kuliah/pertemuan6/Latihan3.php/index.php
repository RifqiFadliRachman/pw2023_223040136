<?php 

//array associative
//array yang indexnya adalah string yang kita buat sendiri

$mahasiswa = [
['nama' => 'rifqi',
 'makanan' => ['🥩','🥪'], 
 'peliharaan' => '🐇'
],
['nama' => 'agus',
 'makanan' => ['🍕'], 
 'peliharaan' => '🐏'
],
['nama' => 'bayu',
 'makanan' => ['🥟','🌮','🍣'],
 'peliharaan' => '🐈'
],
['nama' => 'asep',
 'makanan' => ['🌭'],
 'peliharaan' => '🦓'
],
['nama' => 'surya',
 'makanan' => ['🍟','🍜','🧀'],
 'peliharaan' => '🐕'
]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan1</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach ($mahasiswa as $mhs) { ?>
    <ul>
        <li>Nama: <?= $mhs['nama'];  ?></li>
        <li>Makanan Favorit: 
            <?php foreach ($mhs['makanan'] as $m) {
                echo $m;
            } ?>
        </li>
        <li>Peliharaan: <?= $mhs['peliharaan']; ?></li>
    </ul>
    <?php } ?>
</body>
</html>
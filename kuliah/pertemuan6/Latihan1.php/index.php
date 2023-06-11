<?php 
$binatang = ['🐇','🐏','🐈','🦓','🐕'];
$makanan = ['🥩','🍕','🥟','🌭','🍟'];
$nama = ['rifqi', 'agus', 'bayu', 'asep', 'surya']
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
    <?php foreach ($nama as $i => $nm) { ?>
    <ul>
        <li>Nama: <?= $nm;  ?></li>
        <li>Makanan Favorit <?= $makanan[$i]; ?></li>
        <li>Peliharaan: <?= $binatang[$i]; ?></li>
    </ul>
    <?php } ?>
</body>
</html>
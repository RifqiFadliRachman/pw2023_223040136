<?php 

$mahasiswa = [
['gambar' => 'pp.jpg',
 'nama' => 'Rifqi Fadli Rachman',
 'nrp' => '223040136', 
 'email' => 'rifqi.223040136@mail.unpas.ac.id',
 'jurusan' => 'Teknik Informatika'
],
['gambar' => 'pp.jpg' ,
 'nama'=> 'Darel Pratista Maheswara',
 'nrp' =>'223040133',
 'email' =>'darel.223040133@mail.unpas.ac.id', 
 'jurusan' =>'Teknik Informatika' 
],
['gambar' => 'pp.jpg',
 'nama' => 'Subagiono Prakoso',
 'nrp' => '223040124',
 'email' => 'subagiono.223040124@mail.unpas.ac.id',
 'jurusan' => 'Teknik Informatika'
],
['gambar' => 'pp.jpg',
 'nama' => 'Akbar Abdi Muhammad',
 'nrp' => '223040129',
 'email' => 'akbar.223040129@mail.unpas.ac.id',
 'jurusan' => 'Teknik Informatika'
],
['gambar' => 'pp.jpg',
 'nama' => 'Eggy Bagus Hidayatullah',
 'nrp' => '223040135',
 'email' => 'eggy.223040135@mail.unpas.ac.id',
 'jurusan' => 'Teknik Informatika'
],
['gambar' => 'pp.jpg',
 'nama' => 'Galih Nurhuda',
 'nrp' => '223040130',
 'email' => 'galih.223040130@mail.unpas.ac.id',
 'jurusan' => 'Teknik Informatika'
],
['gambar' => 'pp.jpg',
 'nama' => 'Hanhan Rabianto',
 'nrp' => '223040132',
 'email' => 'hanhan.223040132@mail.unpas.ac.id',
 'jurusan' => 'Teknik Informatika'
],
['gambar' => 'pp.jpg',
 'nama' => 'Arley Prajaya Gunawan',
 'nrp' => '223040106',
 'email' => 'arley.223040106@mail.unpas.ac.id',
 'jurusan' => 'Teknik Informatika'
],
['gambar' => 'pp.jpg',
 'nama' => 'Bagus Geni Hurip',
 'nrp' => '223040118',
 'email' => 'bagus.223040118@mail.unpas.ac.id',
 'jurusan' => 'Teknik Informatika'
],
['gambar' => 'pp.jpg',
 'nama' => 'Fawwas Nawwaf Sabil',
 'nrp' => '223040114',
 'email' => 'fawwas.223040114@mail.unpas.ac.id',
 'jurusan' => 'Teknik Informatika'
]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li>
        <img src ="img/<?= $mhs['gambar']; ?>">
        </li>
        <li>Nama: <?= $mhs['nama'];  ?></li>
        <li>NRP: <?= $mhs['nrp'];  ?> </li>
        <li>Email: <?= $mhs['email'];  ?></li>
        <li>Jurusan: <?= $mhs['jurusan'];  ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>
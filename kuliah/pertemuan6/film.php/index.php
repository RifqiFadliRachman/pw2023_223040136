<?php 

$film =[
    ['poster' => 'comic8.jpg',
    'judul' => 'Comic 8', 
    'tahun' => '2014',
    'genre' => ['Comedy','Action','Crime'],
    'pemeran utama' => ['Ernest Prakasa'],
    'sutradara' => 'Anggy umbara'
   ],
   ['poster' => 'Fastandfurious.jpeg',
    'judul' => 'The Fast And Furious', 
    'tahun' => '2001',
    'genre' => ['Action','Crime','Thriller'],
    'pemeran utama' => ['Vin Diesel,','Paul Walker,','Michelle Rodriguez'],
    'sutradara' => 'Rob Cohen'
   ],
   ['poster' => 'srimulat.jpg',
    'judul' => 'Srimulat: Hil yang Mustahal', 
    'tahun' => '2022',
    'genre' => ['Comedy','Drama','Biography'],
    'pemeran utama' => ['Juan Bione Subiantoro'],
    'sutradara' => 'Fajar Nugros'
   ],
   ['poster' => 'avengers.jpg',
    'judul' => 'Avengers: Endgame', 
    'tahun' => '2019',
    'genre' => ['Action', 'Adventure', 'Drama'],
    'pemeran utama' => ['Robert Downey Jr','chris Evans','Mark Ruffalo'],
    'sutradara' => 'anthony Russo'
   ],
   ['poster' => 'ckt.jpg',
    'judul' => 'Cek Toko Sebelah', 
    'tahun' => '2016',
    'genre' => ['Comedy','Drama'],
    'pemeran utama' => ['Ernest Prakasa','Kin WAh Chew','Gisella Anastasia'],
    'sutradara' => 'Ernest Prakasa'
   ],
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>film favorit</title>
</head>
<body>
    <h2>Daftar Film Favorit</h2>
    <?php foreach ($film as $f) { ?>
    <ul>
        <li>
        <img src ="img/<?= $f['poster']; 'width= "70" height= "90"/>' ?>">
        </li>
        <li>Judul: <?= $f['judul'];  ?> </li>
        <li>Tahun:<?= $f['tahun'];  ?></li>
        <li>Genre:
        <?php foreach ($f['genre'] as $fm) {
                echo $fm;
            } ?>
        </li>
        <li>Pemeran Utama:
        <?php foreach ($f['pemeran utama'] as $fm) {
                echo $fm;
            } ?>
        </li>
        <li>Sutradara:<?= $f['sutradara'];  ?></li>
    </ul>
    <?php } ?>
</body>
</html>
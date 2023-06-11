<?php 

    echo "<h4>Menghitung Luas Lingkaran</h4>";
    function hitungLuasLingkaran($r) {
        $luas = 3.14 * $r * $r;
        return $luas;
    }

        $r1= 10;
        $luas1 = hitungLuasLingkaran($r1);
        echo "jari-jari = $r1 cm. <br>";
        echo "Luas Lingkaran = $luas1 cm²";
        echo"<hr>";
      

    echo "<h4>Menghitung Keliling Lingkaran</h4>";
    function hitungKelilingLingkaran($r){
        $keliling = 2 * 3.14 * $r;
        return $keliling;
    }

        $r2= 20;
        $keliling1 = hitungKelilingLingkaran($r2);
        echo "Jari-jari = $r2 cm. <br>";
        echo "Keliling Lingkaran = $keliling1 cm";
        echo "<hr>";
?>
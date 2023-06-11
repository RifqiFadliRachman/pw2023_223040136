<?php 

function Kelipatan($angka)
{
    // Jika angka dengan kelipatan 3 dan 5, tampilkan RifqiFadli
    if ($angka % 3 == 0 && $angka % 5 == 0) {
        echo "Rifqi Fadli<br>";
    // Jika angka kelipatan 3, tampilkan Rifqi
    } elseif ($angka % 3 == 0) {
        echo "Rifqi<br>";
    // Jika angka kelipatan 5, tampilkan Fadli
    } elseif ($angka % 5 == 0) {
        echo "Fadli<br>";
    // Jika bukan kelipatan 3 atau 5, tampilkan angka sebenarnya
    } else {
        echo $angka . "<br>";
    }
}
    

    for ($i = 1; $i <= 100; $i++) { 
        Kelipatan($i);
}

?>
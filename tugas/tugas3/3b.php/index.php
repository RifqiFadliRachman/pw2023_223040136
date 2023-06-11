<?php 
    function urutanAngka ($angka) {
        $angka = 1;
        for( $i = 0; $i < 5; $i++){

            for( $x = 0; $x <=$i; $x++){
                echo $angka. " ";
                $angka = $angka + 1;
            }
            echo "<br/>";
        }
    }

    echo urutanAngka(5);
?>
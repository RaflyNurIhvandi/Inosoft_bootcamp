<?php

// luas lingkaran
function luas_lingkaran($obj) {
    $jari_jari = $obj/3;
    $hasil = 3.14*($jari_jari*$jari_jari);
    echo $hasil;
}

// keliling lingkaran
function keliling_lingkaran($obj) {
    $jari_jari = $obj/5;
    $hasil = 2*3.14*$jari_jari;
    echo $hasil;
}

// luas persegi panjang
function luas_persegi_panjang($obj) {
    $panjang = $obj/3;
    $lebar = $obj/5;
    $hasil = $panjang*$lebar;
    echo number_format($hasil, 2, ".", "").PHP_EOL;
}

for ($i=1; $i <= 100 ; $i++) { 
    $out = 0;
    if ($i % 3 == 0 && $i % 5 == 0) {
        $out = luas_persegi_panjang($i);
    } else if ($i % 3 == 0){
        $out = luas_lingkaran($i);
    } else if ($i % 5 == 0) {
        $out = keliling_lingkaran($i);
    } else {
        $out = $i;
        echo number_format($out, 2, ".", "").PHP_EOL;
    }
    echo "</br>";
}

?>
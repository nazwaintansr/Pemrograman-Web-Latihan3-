<?php
function tambah($a, $b){
    $hasil = $a + $b;
    echo "Hasil penjumlahan =$hasil";
}

tambah(10, 3);
echo "<br>";
tambah(40, 50);
echo "<hr>";
function kali($c, $d) {
    $hasil_kali = $c * $d;
    return $hasil_kali;
}
$perkalian = kali(3, 4);
echo "Hasil perkalian =$perkalian";
?>
<?php
 $buah = array(
    "apel", 
    "jeruk", 
    "pisang",
    "nanas",
    "kiwi");
    foreach($buah as $buahan){
        echo $buahan. '<br>';
    }
    echo "<hr />";

    $siswa = array("nama" => "John", "umur" => "20", "kota" => "Medan", "jurusan" => "Sistem Informasi");

    echo 'nama siswa : '.$siswa['nama'].'<br />';
    echo 'umur siswa : '.$siswa['umur'].'<br />';
    echo 'kota siswa : '.$siswa['kota'].'<br />';
    echo 'jurusan siswa : '.$siswa['jurusan']. '<br />';
    ?>

    <hr />

    <table border="1">
        <tr>
            <th>Nama Siswa</th>
            <th>Umur Siswa</th>
            <th>Kota Siswa</th>
            <th>JUrusan Siswa</th>
        </tr>
        <tr>
            <td> <?= $siswa['nama'];?></td>
            <td> <?= $siswa['umur'];?></td>
            <td> <?= $siswa['kota'];?></td>
            <td> <?= $siswa['jurusan'];?></td>
        </tr>
    </table>
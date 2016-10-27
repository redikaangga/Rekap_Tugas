<?php

include("koneksi.php");

use konek\con as con;

$siswa = new con;
$hasil = mysql_query($siswa->tampils());

$input = mysql_query($siswa->tambahsis());

// echo "<pre>";
// print_r($input);
// exit();

header("location:siswa.php");

?>
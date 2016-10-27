<?php

include ("koneksi.php");

use konek\con as con;

$siswa = new con;

$hasil = mysql_query($siswa->tampils());
$detail = mysql_query($siswa->datasis());
$update = mysql_query($siswa->updatesis());

header("location:siswa.php");

?>
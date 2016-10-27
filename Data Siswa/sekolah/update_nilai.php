<?php

include ("koneksi.php");

use konek\con as con;

$siswa = new con;

$hasil = mysql_query($siswa->tampiln());
$detail = mysql_query($siswa->datanil());
$update = mysql_query($siswa->updatenil());

header("location:nilai.php");

?>
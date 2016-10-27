<?php

include("koneksi.php");

use konek\con as con;

$mapel = new con;

$hasil = mysql_query($mapel->tampilm());

$input = mysql_query($mapel->tambahmap());

header("location:mapel.php");

?>
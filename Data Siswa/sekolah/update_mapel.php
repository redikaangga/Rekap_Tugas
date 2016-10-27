<?php

include ("koneksi.php");

use konek\con as con;

$mapel = new con;

$hasil = mysql_query($mapel->tampilm());
$detail = mysql_query($mapel->datamap());
$update = mysql_query($mapel->updatemap());

header("location:mapel.php");

?>
<?php

include("koneksi.php");

use konek\con as con;

$nilai = new con;

$hasil = mysql_query($nilai->tampiln());
$input = mysql_query($nilai->tambahnil());
// echo "<pre>";
// print_r($input);
// exit();

header("location:nilai.php");

?>
<?php

include ("koneksi.php");

$id = $_GET['id'];

$sql = "DELETE FROM siswa WHERE id_siswa = '$id'";

mysql_query($sql);

header("location:siswa.php");

?>
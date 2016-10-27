<?php

include ("koneksi.php");

$id = $_GET['id'];

$sql = "DELETE FROM mapel WHERE id_mapel = '$id'";

mysql_query($sql);

header("location:mapel.php");

?>
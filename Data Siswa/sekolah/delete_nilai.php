<?php

include ("koneksi.php");

$id = $_GET['id'];

$sql = "DELETE FROM nilai WHERE id_nilai = '$id'";

mysql_query($sql);

header("location:nilai.php");

?>
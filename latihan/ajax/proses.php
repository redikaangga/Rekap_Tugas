<?php

$local="localhost";
$user="root";
$pass="";
$db="cendana";

$con=mysql_connect($local, $user, $pass) or die("Koneksi gagal");
mysql_select_db($db) or die("Database tidak ada");

$id 		= $_POST['id'];
$nama 		= $_POST['nama'];
$telepon	= $_POST['telepon'];
$kota 		= $_POST['kota'];
$kelamin 	= $_POST['kelamin'];
$id_posisi	= $_POST['id_posisi'];
$status 	= $_POST['status'];

// mysql_query("SELECT nama, kota FROM pegawai");

mysql_query ("
				INSERT INTO pegawai(id, nama, telepon, kota, kelamin, id_posisi, status) 
				VALUES ('$id', $nama', '$telepon', '$kota', $kelamin, '$id_posisi', $status)
			");

// print_r($_POST);

// $pertama = $_POST['angkaper'];
// $dua = $_POST['angkadua'];
// $hasil = $pertama + $dua;

// echo "Hasil dari penjumlahan $pertama dan $dua = {$hasil}";


echo "{$id} {$nama} {$telepon} {$kota} {$kelamin} {$id_posisi} {$status}";

?>
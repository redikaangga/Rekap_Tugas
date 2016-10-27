<?php 

include("koneksi.php");

use konek\con as con;

$siswa = new con;

?>

<h1>Form Tambah Data</h1>

<a href="siswa.php">Kembali</a>

<form action="insert.php" method="POST">

	<table>
		<tr>
			<td>
				Id
			</td>
			<td>
				<input type="text" name="id">
			</td>
		</tr>
		<tr>
			<td>
				Nama
			</td>
			<td>
				<input type="text" name="nama">
			</td>
		</tr>
		<tr>
			<td>
				Alamat
			</td>
			<td>
				<input type="text" name="alamat">
			</td>
		</tr>
		<tr>
			<td>
				Jenis Kelamin
			</td>
			<td>
				<input type="radio" name="kelamin" value="1">Laki-laki
				<input type="radio" name="kelamin" value="2">Perempuan
				<input type="radio" name="kelamin" value="3">Unknown
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" value="Tambah Siswa">
			</td>
		</tr>
	</table>

</form>
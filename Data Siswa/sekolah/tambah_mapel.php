<?php 

include("koneksi.php");

use konek\con as con;

$mapel = new con;

?>

<h1>Form Tambah Mapel</h1>

<a href="siswa.php">Kembali</a>

<form action="insert_mapel.php" method="POST">

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
				Mata Pelajaran
			</td>
			<td>
				<input type="text" name="nama">
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" value="Tambah Mapel">
			</td>
		</tr>
	</table>

</form>
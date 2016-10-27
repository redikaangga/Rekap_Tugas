<?php 

include("koneksi.php");

use konek\con as con;

$nilai = new con;

?>

<h1>Form Tambah Nilai</h1>

<a href="siswa.php">Kembali</a>

<form action="insert_nilai.php" method="POST">

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
				Nilai
			</td>
			<td>
				<input type="text" name="nilai">
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" value="Tambah Nilai">
			</td>
		</tr>
	</table>

</form>
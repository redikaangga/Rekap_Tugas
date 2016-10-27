<?php

include ("koneksi.php");

$id = $_GET['id'];

use konek\con as con;

$siswa = new con;

$detail = mysql_query($siswa->datasis());
$data = mysql_fetch_array($detail);
// $hasil = mysql_query($sql);
// $data = mysql_fetch_array($hasil);

?>

<h1>Detail Siswa</h1>
<br>
<form action="update.php?id=<?php echo $data['id_siswa']; ?>" method="POST">
	<table>
		<tr>
			<td><input type="hidden" value="<?php echo $data['id_siswa']?>" name="ilid"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" value="<?php echo $data['nama']?>" name="ilnama"></td>

		<tr>
			<td>Alamat</td>
			<td><input type="text" value="<?php echo $data['alamat']?>" name="ilalamat"></td>
		</tr>
		<tr>
			<td>Kelamin</td>
			<td><input type="text" value="<?php echo $data['kelamin']?>" name="ilkelamin"></td>
		</tr>
		<tr>
			<td><input type="submit" name="edit" value="Edit"></td>
			<td><a href="siswa.php">Kembali</a></td>
		</tr>
	</table>
</form>

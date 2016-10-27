<?php

include ("koneksi.php");

$id = $_GET['id'];

use konek\con as con;

$nilai = new con;

$detail = mysql_query($nilai->datanil());
$data = mysql_fetch_array($detail);

?>

<h1>Detail Nilai</h1>
<br>
<form action="update_nilai.php?id=<?php echo $data['id_nilai']; ?>" method="POST">
	<table>
		<tr>
			<td><input type="hidden" value="<?php echo $data['id_nilai']?>" name="ilid"></td>
		</tr>
		<tr>
			<td>Nilai</td>
			<td><input type="text" value="<?php echo $data['nilai']?>" name="ilnilai"></td>
		<tr>
			<td><input type="submit" name="edit" value="Edit"></td>
			<td><a href="nilai.php">Kembali</a></td>
		</tr>
	</table>
</form>

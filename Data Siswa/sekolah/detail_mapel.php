<?php

include ("koneksi.php");

$id = $_GET['id'];

use konek\con as con;

$mapel = new con;

$detail = mysql_query($mapel->datamap());
$data = mysql_fetch_array($detail);

?>

<h1>Detail Mapel</h1>
<br>
<form action="update_mapel.php?id=<?php echo $data['id_mapel']; ?>" method="POST">
	<table>
 		<tr>
			<td><input type="hidden" value="<?php echo $data['id_mapel']?>" name="ilid_mapel"></td>
		</tr>
		<tr>
			<td>Mata Pelajaran</td>
			<td><input type="text" value="<?php echo $data['nama_mapel']?>" name="ilmapel"></td>
		<tr>
			<td><input type="submit" name="edit" value="Edit"></td>
			<td><a href="mapel.php">Kembali</a></td>
		</tr>
	</table>
</form>

<?php

include("koneksi.php");

use konek\con as con;

$index = new con;

$hasil = mysql_query($index->show());

?>

<form>
	<a href="index.php" name="index">INDEX</a>
	<a href="siswa.php" name="siswa">SISWA</a>
	<a href="mapel.php" name="siswa">MAPEL</a>
	<a href="nilai.php" name="siswa">NILAI</a>
	<br>
	<br>
	<table border="0">
		<thead>
			<tr><td colspan="5" align="center"><h2>INDEX SISWA</h2></td></tr>
			<tr>
				<th>Nama</th>
				<th>Kota</th>
				<th>Kelamin</th>
				<th>Mata Pelajaran</th>
				<th>Nilai</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			while($row = mysql_fetch_array($hasil))
				{ ?>
			<tr>
				<td align="center"><?php echo $row['siswa'] ?></td>
				<td align="center"><?php echo $row['kota'] ?></td>
				<td align="center"><?php echo $row['kelamin'] ?></td>
				<td align="center"><?php echo $row['mapel'] ?></td>
				<td align="center"><?php echo $row['nilai'] ?></td>
			</tr>
			<tr>
				<?php } ?>
			</tr>
		</tbody>
	</table>
</form>
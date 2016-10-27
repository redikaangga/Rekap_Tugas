<?php

include("koneksi.php");

use konek\con as con;

$mapel = new con;

$hasil = mysql_query($mapel->tampilm());

// echo "<pre>";
// print_r($siswa->tampil());
// exit();

?>

<form action="mapel" method="POST">
<a href="index.php" name="index">INDEX</a>
<a href="siswa.php" name="siswa">SISWA</a>
<a href="mapel.php" name="siswa">MAPEL</a>
<a href="nilai.php" name="siswa">NILAI</a>
	<table>
		<thead>
		<tr><td colspan="5" align="center"><h2>TABEL MAPEL</h2></td></tr>
			<tr>
				<th>Id</th>
				<th>Mata Pelajaran</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
		<?php while($row = mysql_fetch_array($hasil))
		{ ?>
			<tr>
				<td align="center"><?php echo $row['id_mapel'] ?></td>
				<td align="center"><?php echo $row['nama_mapel'] ?></td>
				<td>
					 <a href="delete_mapel.php?id=<?php echo $row['id_mapel'] ?>">Hapus </a> 
					 <a href="detail_mapel.php?id=<?php echo $row['id_mapel'] ?>">Detail</a> 
				</td>				
			</tr>
			<tr>
		<?php } ?>
		</tbody>
	</table>
	<a href="tambah_mapel.php">Tambah</a>
</form>
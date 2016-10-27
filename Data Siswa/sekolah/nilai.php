<?php

include("koneksi.php");

use konek\con as con;

$nilai = new con;

$hasil = mysql_query($nilai->tampiln());

// echo "<pre>";
// print_r($siswa->tampil());
// exit();

?>

<form action="nilai" method="POST">
<a href="index.php" name="index">INDEX</a>
<a href="siswa.php" name="siswa">SISWA</a>
<a href="mapel.php" name="siswa">MAPEL</a>
<a href="nilai.php" name="siswa">NILAI</a>
	<table>
		<thead>
		<tr><td colspan="5" align="center"><h2>TABEL NILAI</h2></td></tr>
			<tr>
				<th>Id</th>
				<th>Nilai</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
		<?php while($row = mysql_fetch_array($hasil))
		{ ?>
			<tr>
				<td align="center"><?php echo $row['id_nilai'] ?></td>
				<td align="center"><?php echo $row['nilai'] ?></td>
				<td>
					 <a href="delete_nilai.php?id=<?php echo $row['id_nilai'] ?>">Hapus </a> 
					 <a href="detail_nilai.php?id=<?php echo $row['id_nilai'] ?>">Detail</a> 
				</td>			
			</tr>
			<tr>
		<?php } ?>
		</tbody>
	</table>
	<a href="tambah_nilai.php">Tambah</a>
</form>
<?php

include("koneksi.php");

use konek\con as con;

$siswa = new con;

$hasil = mysql_query($siswa->tampils());

// echo "<pre>";
// print_r($siswa->tampil());
// exit();

?>

<form action="siswa" method="POST">
<a href="index.php" name="index">INDEX</a>
<a href="siswa.php" name="siswa">SISWA</a>
<a href="mapel.php" name="siswa">MAPEL</a>
<a href="nilai.php" name="siswa">NILAI</a>
	<table>
		<thead>
		<tr><td colspan="5" align="center"><h2>TABEL SISWA</h2></td></tr>
			<tr>
				<th>Id</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Kelamin</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
		<?php 
			while($row = mysql_fetch_array($hasil))
		{ ?>
			<tr>
				<td align="center"><?php echo $row['id_siswa'] ?></td>
				<td><?php echo $row['nama'] ?></td>
				<td align="center"><?php echo $row['alamat'] ?></td>
				<td align="center"><?php echo $row['kelamin'] ?></td>
				<td>
					 <a href="delete.php?id=<?php echo $row['id_siswa'] ?>">Hapus</a> 
					 <a href="detail.php?id=<?php echo $row['id_siswa'] ?>">Detail</a> 
				</td>				
			</tr>
			<tr>
		<?php } ?>
		</tbody>
	</table>
	<a href="tambah.php">Tambah</a>
</form>
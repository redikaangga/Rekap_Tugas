<?php namespace konek;

class con
{
	public function __construct(){
		$local="localhost";
		$user="root";
		$pass="";
		$db="sekolah";
		$con=mysql_connect($local, $user, $pass) or die("Koneksi gagal");
		mysql_select_db($db) or die("Database tidak ada");
	}

	public function show(){
		$sql = "SELECT 	siswa.nama as siswa,
						siswa.alamat as kota,
						kelamin.nama_kelamin as kelamin,
						mapel.nama_mapel as mapel,
						nilai.nilai

		FROM siswa,nilai,kelamin,mapel

		WHERE 	siswa.id_siswa = nilai.id_siswa 
			AND siswa.kelamin=kelamin.id_kelamin 
			AND mapel.id_mapel=nilai.id_mapel";

		return $sql;
	}

	public function tampils(){
		$sql = "SELECT * FROM siswa";
		// $result = mysql_query($sql);
		// $row = mysql_fetch_array($result);
		return $sql;
	}

	public function tampilm(){
		$sql = "SELECT * FROM mapel";
		// $result = mysql_query($sql);
		// $row = mysql_fetch_array($result);
		return $sql;
	}

	public function tampiln(){
		$sql = "SELECT * FROM nilai";
		// $result = mysql_query($sql);
		// $row = mysql_fetch_array($result);
		return $sql;
	}

	public function tambahsis(){
		$id = $_POST["id"];
		$nama = $_POST["nama"];
		$alamat = $_POST["alamat"];
		$kelamin = $_POST["kelamin"];

		$sql = "INSERT INTO siswa(id_siswa, nama, alamat, kelamin)
		VALUES('$id', '$nama', '$alamat', '$kelamin')";
		return $sql;
	}

	public function tambahmap(){
		$id = $_POST["id"];
		$nama = $_POST["nama"];

		$sql = "INSERT INTO mapel(id_mapel, nama_mapel)
		VALUES('$id', '$nama')";
		return $sql;
	}

	public function tambahnil(){
		$id = $_POST["id"];
		$nilai = $_POST["nilai"];

		$sql = "INSERT INTO nilai(id_nilai, nilai)
		VALUES('$id', '$nilai')";
		return $sql;
	}

	public function datasis(){
		$id = $_GET['id'];
		// $nama = $_POST['ilnama'];
		// $alamat = $_POST['ilalamat'];
		// $kelamin = $_POST['ilkelamin'];

		$data = "SELECT * 
		FROM 	siswa
		WHERE
		siswa.id_siswa = '{$id}'";

		return $data;
	}

	public function updatesis(){
		$id = $_GET['id'];
		$nama = $_POST['ilnama'];
		$alamat = $_POST['ilalamat'];
		$kelamin = $_POST['ilkelamin'];

		$sql = "UPDATE siswa
		SET 
		nama='$nama',
		alamat='$alamat',
		kelamin='$kelamin'
		WHERE id_siswa=$id";

		return $sql;
	}

	public function datamap(){
		$id = $_GET['id'];

		$data = "
		SELECT * 
		FROM 	mapel
		WHERE
		mapel.id_mapel = '{$id}'
		";

		return $data;
	}

	public function updatemap(){
		$id = $_GET['id'];

		$nama = $_POST['ilmapel'];

		$sql = "UPDATE mapel
		SET 
		nama_mapel='$nama'
		WHERE id_mapel=$id";

		return $sql;
	}

	public function datanil(){
		$id = $_GET['id'];

		$data = "
		SELECT * 
		FROM 	nilai
		WHERE
		nilai.id_nilai = '{$id}'
		";

		return $data;
	}

	public function updatenil(){
		$id = $_GET['id'];

		$nilai = $_POST['ilnilai'];

		$sql = "
		UPDATE nilai
		SET 
		nilai='$nilai'
		WHERE id_nilai=$id
		";

		return $sql;
	}

}

?>
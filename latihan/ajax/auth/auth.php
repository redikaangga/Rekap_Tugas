<?php
session_start();
include ("koneksi.php");
// mysql_select_db("cendana");

$user = $_POST['user'];
$pass = md5($_POST['pass']);

$sql = "SELECT * FROM login WHERE username = '{$user}'";
$query = mysql_query($sql);

if(mysql_num_rows($query) == 1){

	$result = mysql_fetch_array($query);

	if($pass == $result['password']){
		$_SESSION['userdata'] = mysql_fetch_array($query);
		header("location:dashboard.php");
	}
	else{
		header("location:login.php");
	}
}else{
	header("loaction:login.php");
}


?>
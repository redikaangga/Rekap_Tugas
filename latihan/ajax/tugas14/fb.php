<?php namespace sosmed;

include "output.php";

use inter\sosmed as sosmed;

class facebook implements sosmed
{
	public function __construct()
	{
		$this->like = 0;
	}
	public function tambah()
	{
		$this->like++;
	}
	public function kurang()
	{
		$this->like--;
	}
	public function tampil()
	{
		echo "Total like facebook : " . $this->like . " \n";
	}
	public function total()
	{
		return $this->like;
	}
}

?>
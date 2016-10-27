<?php namespace sosmed2;

use inter\sosmed as sosmed;

class twitter implements sosmed
{
	public function __construct()
	{
		$this->fav = 0;
	}
	public function tambah()
	{
		$this->fav++;
	}
	public function kurang()
	{
		$this->fav--;
	}
	public function tampil()
	{
		echo "Total favorit twitter : " . $this->fav . " \n";
	}
	public function total()
	{
		return $this->fav;
	}
}

?>
<?php namespace sosmed3;

use inter\sosmed as sosmed;

class gplus implements sosmed
{
	public function __construct()
	{
		$this->plus = 0;
	}
	public function tambah()
	{
		$this->plus++;
	}
	public function kurang()
	{
		$this->plus--;
	}
	public function tampil()
	{
		echo "Total plus G+ : " . $this->plus . " \n";
	}
	public function total()
	{
		return $this->plus;
	}
}

?>
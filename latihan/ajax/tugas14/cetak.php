<?php namespace cetak;

use sosmed\facebook as fb;
use sosmed2\twitter as twit;
use sosmed3\gplus as gplus;
use inter\sosmed as sosmed;

class output
{
	public function cetak(sosmed $like)
	{
		$like->tampil();
	}
}

?>
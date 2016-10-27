<?php

include "cetak.php";
include "compare.php";
include "fb.php";
include "twitter.php";
include "gplus.php";

$fesbuk = new sosmed\facebook();
$fesbuk->tambah();
$fesbuk->tambah();
$fesbuk->kurang();

$OUTF = new cetak\output();
$OUTF->cetak($fesbuk);

$tw = new sosmed2\twitter();
$tw->tambah();
$tw->tambah();
$tw->kurang();

$OUTT = new cetak\output();
$OUTT->cetak($tw);

$gp = new sosmed3\gplus();
$gp->tambah();
$gp->tambah();
$gp->kurang();

$OUTG = new cetak\output();
$OUTG->cetak($gp);

$OUTC = new banding\compare();
$OUTC->comp($fesbuk, $tw, $gp);

// interface sosmed{
// 	public function tambah();
// 	public function kurang();
// 	public function tampil();
// 	public function total();
// }

// class output
// {
// 	public function cetak(sosmed $like)
// 	{
// 		$like->tampil();
// 	}
// }

// class facebook implements sosmed
// {
// 	public function __construct()
// 	{
// 		$this->like = 0;
// 	}
// 	public function tambah()
// 	{
// 		$this->like++;
// 	}
// 	public function kurang()
// 	{
// 		$this->like--;
// 	}
// 	public function tampil()
// 	{
// 		echo "Total like facebook : " . $this->like . " \n";
// 	}
// 	public function total()
// 	{
// 		return $this->like;
// 	}
// }

// class twitter implements sosmed
// {
// 	public function __construct()
// 	{
// 		$this->fav = 0;
// 	}
// 	public function tambah()
// 	{
// 		$this->fav++;
// 	}
// 	public function kurang()
// 	{
// 		$this->fav--;
// 	}
// 	public function tampil()
// 	{
// 		echo "Total favorit twitter : " . $this->fav . " \n";
// 	}
// 	public function total()
// 	{
// 		return $this->fav;
// 	}
// }

// class gplus implements sosmed
// {
// 	public function __construct()
// 	{
// 		$this->plus = 0;
// 	}
// 	public function tambah()
// 	{
// 		$this->plus++;
// 	}
// 	public function kurang()
// 	{
// 		$this->plus--;
// 	}
// 	public function tampil()
// 	{
// 		echo "Total plus G+ : " . $this->plus . " \n";
// 	}
// 	public function total()
// 	{
// 		return $this->plus;
// 	}
// }
// class banding
// {
// 	public function comp(sosmed $lk, sosmed $fv, sosmed $pl)
// 	{
// 		if($lk->total() > $fv->total() && $lk->total() > $pl->total())
// 		{
// 			echo "Facebook paling populer\n";
// 		}
// 		else if ($fv->total() > $lk->total() && $fv->total() > $pl->total())
// 		{
// 			echo "Twitter paling populer\n";
// 		}
// 		else if ($pl->total() > $lk->total() && $pl->total() > $fv->total())
// 		{
// 			echo "G+ paling populer\n";
// 		}		
// 		else {
// 			echo "Semua sama\n";
// 		}
// 	} 
// }

// $fesbuk = new facebook();
// $fesbuk->tambah();

// $OUTF = new output();
// $OUTF->cetak($fesbuk);

// $twe = new twitter();
// $twe->tambah();

// $OUTT = new output();
// $OUTT->cetak($twe);

// $gp = new gplus();
// $gp->tambah();

// $OUTG = new output();
// $OUTG->cetak($gp);

// $OUTC = new banding;
// $OUTC->comp($fesbuk, $twe, $gp);

?>
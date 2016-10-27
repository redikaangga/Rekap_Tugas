<?php namespace banding;

use sosmed\facebook as fb;
use sosmed2\twitter as twit;
use sosmed3\gplus as gplus;
use inter\sosmed as sosmed;

class compare{
	public function comp(sosmed $lk, sosmed $fv, sosmed $pl)
	{
		if($lk->total() > $fv->total() && $lk->total() > $pl->total())
		{
			echo "Facebook paling populer\n";
		}
		else if ($fv->total() > $lk->total() && $fv->total() > $pl->total())
		{
			echo "Twitter paling populer\n";
		}
		else if ($pl->total() > $lk->total() && $pl->total() > $fv->total())
		{
			echo "G+ paling populer\n";
		}		
		else {
			echo "Semua sama\n";
		}
	} 
}

?>
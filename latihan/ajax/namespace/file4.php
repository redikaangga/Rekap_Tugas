<?php namespace run;

include "file1.php";
include "file2.php";
// include "file3.php";
include "lib/file5.php";
include "file6.php";

use foo as feline;
use foo2 as feline2;
use bar as canine;
use animate;
use uwong as wong;

$asu = new canine\asu;
$wong = new wong\manusia;

echo feline\kucing::say();
// echo feline2\kucing::makan();
// echo $asu->say();
// echo animate\kewan::breathe();
// echo $wong->mlaku();

?>
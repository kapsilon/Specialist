<?php

session_start();

$nChars = rand(4,6);

$_SESSION["randStr"] = substr(md5(uniqid()), 0, $nChars);

$im = imageCreateFromJpeg("images/noise.jpg");
imageAntiAlias($im, true);

	
$x = rand(10,30);
$y = rand(15,35);
$deltaX = rand(30,40);

for ($i=0; $i <= $nChars; $i++) {
	$size = rand(18,30);
	$angle = -30 + rand(0,60);
	$color = imageColorAllocate($im, rand(50,150), rand(50,150), rand(50,150));
	imageTtfText($im, $size, $angle,$x,$y,$color,'fonts/georgia.ttf', $_SESSION["randStr"][$i]);
	$x = $x + $deltaX;
}

header("Content-type:image/jpg");
imageJpeg($im,null,50);
?>

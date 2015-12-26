<?php

//$i = imageCreate(500, 300);
$i = imageCreateTrueColor(500, 300);
imageAntiAlias($i, true);

$green = imageColorAllocate($i, 156, 14, 200);
imageFill($i,0,0,$green);

$white = imageColorAllocate ($i,255,255,255);

/*
$j=0;
while(++$j<1000)
imageSetPixel($i,rand(1,500), rand(1,300), $white);
*/

/*
$j=0;
while(++$j<1000)
imageLine($i, 250, 150, rand(1,500), rand(1,300), $white);
*/

/*
$j=0;
while(++$j<100)
imageRectangle($i, rand(1,500), rand(1,300), rand(1,500), rand(1,300), $white);
*/

/*
$j=0;
while(++$j<10)
imageFilledRectangle($i, rand(1,500), rand(1,300), rand(1,500), rand(1,300), $white);
*/

/*
$points = array(0,0,100,200,300,200);
imagePolygon($i, $points, 3, $white);
*/

/*
$j=0;
while(++$j<999)
$points[] = rand(1,300);
imagePolygon($i, $points, round(count($points)/2), $white);
*/

/*
$j=0;
while(++$j<199)
$points[] = rand(1,1000);
imageFilledPolygon($i, $points, round(count($points)/2), $white);
*/

/*
$j=0;
while(++$j<299)
imageEllipse($i, rand(400,200), rand(400,200), rand(50,150), rand(50,300), $white);
*/

/*
$j=0;
while(++$j<19)
imageFilledEllipse($i, rand(200,400), rand(100,200), rand(50,150), rand(50,100), $white);
*/

/*
$j=0;
while(++$j<99)
imageArc($i, rand(200,400), rand(100,200), rand(50,150), rand(50,100), rand(0,270), rand(0,270), $white);
*/
/*
$j=0;
while(++$j<3)
imageFilledArc($i, rand(200,400), rand(100,200), rand(50,150), rand(50,100), rand(0,270), rand(0,270), $white,IMG_ARC_EDGED);
*/

/*
$poll = [];
$max = rand(10,20);
for ($j=1; $j <= $max; $j++) {
	$poll[$j] = rand(200,800);
}
//$poll = array(10,34,52,4,18,96);
$sum = array_sum($poll);
$first = 0;

foreach($poll as &$value) {
	$value /= $sum;
	$color = imageColorAllocate($i,rand(100,250), rand(100,250), rand(100,250));
	$second = $value*360 + $first;
	imageFilledArc($i,250,150,250,250,$first,$second,$color, IMG_ARC_PIE);
	$first = $second;
	}
*/


imageTtfText($i, 30, 10, 200, 150, $red,'georgia.ttf', 'PHP5 Взрыв!');


/*
header("Content-type:image/gif");
imageGif($i);
*/

header("Content-type:image/jpg");
imageJpeg($i);
//imageJpeg($i, "test.jpg");
//imageJpeg($i, "", 85);


?>

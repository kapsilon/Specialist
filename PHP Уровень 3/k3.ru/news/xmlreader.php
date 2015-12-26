<?php

const N = "news.xml";

$xmlr = new XMLReader(N);

$xmlr->open(N);

/*
$xmlr->read();
echo $xmlr->name, "<br>";
echo $xmlr->depth, "<br>";
echo $xmlr->nodeType, "<br>";
*/

while ($xmlr->read()) {
if ($xmlr->nodeType !=3) continue;
//echo $xmlr->name, " ";
//echo $xmlr->depth, " ";
//echo $xmlr->nodeType, " ";
echo $xmlr->value, "<hr>";
}
?>
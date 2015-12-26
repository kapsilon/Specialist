<?php

const N = "test.xml";

$xmlw = new XMLWriter(N);

$xmlw->openURI(N);

$xmlw->startDTD("xml");
$xmlw->endDTD();

$xmlw->setIndent(1);

for ($i=0; $i<5; $i++) {
	$xmlw->startElement("user");
		$xmlw->startElement("name");
		$xmlw->text(rand(100,900));
		$xmlw->endElement();
		
		$xmlw->startElement("password");
		$xmlw->text(md5(uniqid()));
		$xmlw->endElement();
	$xmlw->endElement();
}

echo $xmlw->outputMemory();
?>
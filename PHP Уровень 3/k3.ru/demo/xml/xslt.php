<?php
	//Создание объекта XML
	$xml = new DomDocument();
	//Загрузка XML документа
	$xml->load ('catalog.xml');
	//Создание объекта XSL
	$xsl = new DomDocument();
	//Загрузка XSL документа
	$xsl->load ('catalog.xsl');
	//Создание XSLT парсера
	$xslt = new XSLTProcessor();
	//Загрузка XSL объекта
	$xslt->importStylesheet($xsl);
	//Парсинг
	echo $xslt->transformToXML($xml);
?>
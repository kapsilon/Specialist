<?php

$client = new SoapClient("http://k3/soap/news.wsdl");
try{
$result = $client->getNewsCount();
echo "<p>Всего новостей: $result</p>";
$result = $client->getNewsCountByCat(1);
echo "<p>Всего новостей в категории Политика: $result</p>";
$result = $client->getNewsById(1);
$news = unserialize(base64_decode($result));
var_dump($news);
} catch(SoapFault $e){
echo 'Операция '.$e->faultcode.' вернула ошибку: '.$e->getMessage();
}
	
?>
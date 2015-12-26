<?php
	const RSS_URL = "http://k3/news/rss.xml";
	const FILE_NAME = "news.xml";
	
	function download($url, $filename) {
		file_put_contents($filename, file_get_contents($url));
	
	}
	
	
if (!file_exists(FILE_NAME))
	download(RSS_URL, FILE_NAME);
	

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Новостная лента</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<h1>Последние новости</h1>
<?php
	$sxml = simplexml_load_file(FILE_NAME);
	
	//var_dump($sxml);
	foreach ($sxml->channel->item as $item) {
	echo <<<NEWS
	{$item->title}<br>
	{$item->link}<br>
	{$item->description}<br>
	{$item->category}<hr>
	
NEWS;
	}
?>
</body>
</html>
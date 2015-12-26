<?php

//include "INewsDB.class.php";

class NewsDB implements INewsDB {
	const DB_NAME = "C:/OpenServer/domains/k3/news/new.db";
	const RSS_NAME = "rss.xml";
	const RSS_TITLE = "Последние новости";
	const RSS_LINK = "http://k3/news/news.php";
	
	protected $_db;
	
	function __construct(){
		$this->_db = new SQLite3(self::DB_NAME);
		if (filesize(self::DB_NAME) == 0) {
			$this->_db -> exec(file_get_contents("news.txt"));
		}
		
	}

	function __destruct() {
		$this->_db->close();
	}
	
	function saveNews($title, $category, $description, $source){
		$dt = time();
		$sql = "INSERT into msgs (title, category, description, source, datetime) VALUES (:title, :category, :description, :source, $dt)";
		
		$stmt = $this->_db->prepare($sql);
		$stmt->bindParam(':title',$title); 
		$stmt->bindParam(':category',$category); 
		$stmt->bindParam(':description',$description); 
		$stmt->bindParam(':source',$source); 
		
		$stmt->execute();
		$stmt->close();
		
		$this->createRss();
		
		if ($this->_db->lastErrorCode() > 0)
			return false;
		else return true;
		
	}
	
	function getNews(){
		$sql = "SELECT msgs.id as id, title, category.name as category, description, source, datetime
				FROM msgs, category
				WHERE category.id = msgs.category
				ORDER BY msgs.id DESC";
		
		$result = $this->_db->query($sql);
		
		while($rows[] = $result->fetchArray(SQLITE3_ASSOC));

		return $rows;
	}
	
	function deleteNews($id){
		$id = abs((int) $id);
		$sql = "DELETE FROM msgs
		WHERE id=$id";
		$this->_db->query($sql);
		if($this->_db->lastErrorCode() > 0)
			return false;
		else return true;
	}
	
	function createRss() {
		$dom = new DOMDocument("1.0","utf-8");
		$dom->formatOutput = true;
		$dom->preserveWhiteSpace = false;
		
		$rss = $dom->createElement("rss");
		$dom->appendChild($rss);
		
		$version = $dom->createAttribute("version");
		$version->value = '2.0';
		$rss->appendChild($version);
		
		$channel = $dom->createElement("channel");
		$rss->appendChild($channel);
		
		$title = $dom->createElement("title", self::RSS_TITLE);
		$channel->appendChild($title);
		
		$link = $dom->createElement("link", self::RSS_LINK);
		$channel->appendChild($link);
		
		$items = $this->getNews();
		foreach($items as $item) {
			$rssItem = $dom->createElement("item");
			$nTitle = $dom->createElement("title", $item["title"]);
			$nLink = $dom->createElement("link", $item["source"]);
			$nDesc = $dom->createElement("description", $item["description"]);
			$nPub = $dom->createElement("pubYear", $item["datetime"]);
			$nCategory = $dom->createElement("category", $item["category"]);
			
			$rssItem->appendChild($nTitle);
			$rssItem->appendChild($nLink);
			$rssItem->appendChild($nDesc);
			$rssItem->appendChild($nPub);
			$rssItem->appendChild($nCategory);
			
			$channel->appendChild($rssItem);
		
		}
		
		$dom->save(self::RSS_NAME);
	}
	
		function db2Arr($res) {
		$arr = [];
		while($row = $res->fetchArray()) {
			$arr[] = $row;
		}
		return $arr;
	}
}



//$news = new NewDB()
	
	

?>
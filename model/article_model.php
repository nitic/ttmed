<?php
include_once(dirname(dirname(__FILE__))."/config/database.php");

class Article_Model{
	
        function __construct() {
		$this->dba = new Database();
	}
	
	function get_all_article(){
		$Field = "blogid, title, pubtime, tags, content, picture";
		$Table = "blogs ORDER BY blogid DESC";
		return $this->dba->Selected($Field,$Table);
	}
	
	function count_article($type){
		$Field = "count(blogid)";
		$Table = "blogs";
		$Condition = "category = ".$type;
		return $this->dba->SelectRecords($Field,$Table,$Condition);
	}
	
	function get_lists_article(){
		$Field = "blogid, title";
		$Table = "blogs ORDER BY blogid DESC LIMIT 0, 5";
		return $this->dba->Selected($Field,$Table);
	}
	
	function get_lists_pagination($limit, $type){
		$Field = "blogid, title, pubtime, category, picture";
		$Table = "blogs";
		$Condition = "category = ".$type." ORDER BY blogid DESC LIMIT ".$limit.", 20";
		return $this->dba->SelectRecords($Field,$Table,$Condition);
	}

	function get_relate_article(){
		$Field = "blogid, title, pubtime, category, picture, name";
		$Table = "blogs join category on category.id = blogs.category ";
		$Condition = "blogs.category <> '99' ORDER BY pubtime DESC LIMIT 0, 9";
		return $this->dba->SelectRecords($Field,$Table,$Condition);
	}
	
	function get_article_by_id($id){
		$Field = "title, pubtime, tags, content, blogs.category as typeID, picture, name";
		$Table = "blogs join category on category.id = blogs.category";
		$Condition = "blogid = ".$id;
		return $this->dba->SelectRecords($Field,$Table,$Condition);
	}
	
	function get_sample_article($category){
		$Field = "blogid, title, picture";
		$Table = "blogs";
		$Condition = "category = ".$category ." ORDER BY blogid DESC LIMIT 0, 2";
		return $this->dba->SelectRecords($Field,$Table,$Condition);
	}
	
	function __destruct() {
		unset($this->dba);
	}
}

?>

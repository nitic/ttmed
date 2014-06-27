<?php
include_once("./DbAcess.php");
class article {
	function article(){
		$this->dba = new DbAcess();
	}
	////////////////////////////////////////////////////////
	function get_all_article(){
		$Field = "blogid, title, pubtime, tags, content, picture";
		$Table = "article ORDER BY blogid DESC";
		return $this->dba->Selected($Field,$Table);
	}
	////////////////////////////////////////////////////////
	function get_full_article_by_id($id){
		$Field = "title, pubtime, tags, content, picture";
		$Table = "article";
		$Condition = "blogid = ".$id;
		return $this->dba->SelectRecords($Field,$Table,$Condition);
	}
	
	////////////////////////////////////////////////////////
	function get_sample_article($category){
		$Field = "blogid, title, picture";
		$Table = "article";
		$Condition = "category = ".$category ." ORDER BY blogid DESC LIMIT 0, 2";
		return $this->dba->SelectRecords($Field,$Table,$Condition);
	}
	
	
///////////////////////////////////////////////////////////////////////////
	function __destruct() {
		unset($this->dba);
	}
}

?>

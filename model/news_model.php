<?php
include_once(dirname( dirname( __FILE__ ) )."/config/database.php");
 
 class News_model{
	
        function __construct() {
		$this->dba = new Database();
	}
	

	function get_all_news(){
		$Field = "id, detail, type, link, pubdate";
		$Table = "news ORDER BY pubdate DESC";
		return $this->dba->Selected($Field,$Table);
	}
	
	function get_latest_news(){
		$Field = "id, detail, type, link, pubdate";
		$Table = "news ORDER BY pubdate DESC LIMIT 0, 9";
		return $this->dba->Selected($Field,$Table);
	}

	function get_news_by_type($type){
		$Field = "`id`, `detail`, `type`, `link`, `pubdate`";
		$Table = "news";
		$Condition = "type = ".$type ." ORDER BY pubdate DESC LIMIT 0, 4";
		return $this->dba->SelectRecords($Field,$Table,$Condition);
	}
	
	
	function count_point($formID,$startDate,$endDate){
		$Field = "count(*)";
		$Table = "point";
		$Condition = "form_fk = ".$formID ." and stampdate between '".$startDate."' and '".$endDate."'";
		return $this->dba->SelectRecords($Field,$Table,$Condition);
	}
	
	function insert_news($Value){
		$Table = "news";
		$Field = "detail, type, link, pubdate";
		if($this->dba->InsertRecord($Table,$Field,$Value)){
			return true;
		}else{
			return false;
		}
	}
	
	function __destruct() {
		unset($this->dba);
	}
}

?>

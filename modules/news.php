<?php

include_once(dirname(dirname(__FILE__))."/DbAcess.php");
class news {
	function news(){
		$this->dba = new DbAcess();
	}
	////////////////////////////////////////////////////////
	function get_all_news(){
		$Field = "id, detail, type, link, pubdate";
		$Table = "news ORDER BY pubdate DESC";
		return $this->dba->Selected($Field,$Table);
	}
	////////////////////////////////////////////////////////
	function get_news_by_type($section){
		$Field = "`id`, `detail`, `type`, `link`, `pubdate`";
		$Table = "news";
		$Condition = "type = ".$section ." ORDER BY pubdate DESC LIMIT 0, 4";
		return $this->dba->SelectRecords($Field,$Table,$Condition);
	}
	
	///////////////////////////////////////////////////////////
	function count_point($formID,$startDate,$endDate){
		$Field = "count(*)";
		$Table = "point";
		$Condition = "form_fk = ".$formID ." and stampdate between '".$startDate."' and '".$endDate."'";
		return $this->dba->SelectRecords($Field,$Table,$Condition);
	}
	///////////////////////////////////////////////////////////
	
	function insert_news($Value){
		$Table = "news";
		$Field = "detail, type, link, pubdate";
		if($this->dba->InsertRecord($Table,$Field,$Value)){
			return true;
		}else{
			return false;
		}
	}
	
///////////////////////////////////////////////////////////////////////////
	function __destruct() {
		unset($this->dba);
	}
}

?>

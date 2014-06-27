<?php
include_once(dirname(dirname(__FILE__))."/config/database.php");

class Event_Model{
	
        function __construct() {
		$this->dba = new Database();
	}
	
	function get_all_event(){
		$Field = "id, month_date, day_date, title, picture";
		$Table = "event";
		return $this->dba->Selected($Field,$Table);
	}
	
	function get_event_by_id($id){
		$Field = "id, month_date, day_date, title, picture";
		$Table = "event";
		$Condition = "id = ".$id;
		return $this->dba->SelectRecords($Field,$Table,$Condition);
	}
	
	function get_event_by_month($month){
		$Field = "id, month_date, day_date, title, picture";
		$Table = "event";
		$Condition = "month_date = ".$month ." ORDER BY day_date ASC ";
		return $this->dba->SelectRecords($Field,$Table,$Condition);
	}
	
	function __destruct() {
		unset($this->dba);
	}
}

?>

<?php
include_once(dirname(dirname(__FILE__))."/config/database.php");

class Gellary_Model{
	
        function __construct() {
		$this->dba = new Database();
	}
	
	function get_all(){
		$Field = "id, title, link, photo";
		$Table = "gellary";
		return $this->dba->Selected($Field,$Table);
	}

	function get_picture(){
		$Field = "title, link, photo";
		$Table = "gellary";
		$Condition = "type = 'picture' ORDER BY id DESC LIMIT 0, 4";
		return $this->dba->SelectRecords($Field,$Table,$Condition);
	}
	
	function get_video(){
		$Field = "title, link, photo";
		$Table = "gellary";
		$Condition = "type = 'video' ORDER BY id DESC LIMIT 0, 4";
		return $this->dba->SelectRecords($Field,$Table,$Condition);
	}
	
	function __destruct() {
		unset($this->dba);
	}
}

?>

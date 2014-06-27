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

	function get_gellery(){
		$Field = "title, link, photo";
		$Table = "gellary ORDER BY id DESC LIMIT 0, 6";
		return $this->dba->Selected($Field,$Table);
	}
	
	function __destruct() {
		unset($this->dba);
	}
}

?>

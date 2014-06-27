<?php
include_once(dirname(dirname(__FILE__))."/config/database.php");

class Tag_Model{
	
        function __construct() {
		$this->dba = new Database();
	}
	
	function get_all(){
		$Field = "tagid, tagname, tagcounter, tagentry";
		$Table = "tags";
		return $this->dba->Selected($Field,$Table);
	}

	function get_tag(){
		$Field = "tagid, tagname, tagcounter";
		$Table = "tags ORDER BY tagcounter DESC LIMIT 0, 10";
		return $this->dba->Selected($Field,$Table);
	}
	
	function __destruct() {
		unset($this->dba);
	}
}

?>

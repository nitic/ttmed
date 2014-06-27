<?php
include_once("../DbAcess.php");
class authent {
	function authent(){
		$this->dba = new DbAcess();
	}
	////////////////////////////////////////////////////////
	function get(){
		$Field = "id, picture, detail, type, link, target, keyword, time";
		$Table = "news ORDER BY time DESC";
		return $this->dba->Selected($Field,$Table);
	}
	
	////////////////////////////////////////////////////////
	function check_user_password($username,$password){
	    $user = mysql_real_escape_string($username);
		$passwd = mysql_real_escape_string($password);
		$Field = "id, username, email";
		$Table = "members";
		$Condition = "username = '".$user ."' AND password = '".$passwd."'";
		return $this->dba->SelectRecords($Field,$Table,$Condition);
	}
	
	
///////////////////////////////////////////////////////////////////////////
	function __destruct() {
		unset($this->dba);
	}
}

?>

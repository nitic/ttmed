<?php
class Database {
	
      function __construct() {
		$this->objConnect = mysql_connect("127.0.0.1","ttmed_db","ttmed##") or die(mysql_error());
		$this->objDB = mysql_select_db("ttmed_db") or die(mysql_error());
		mysql_query("SET character_set_results=utf8");
		mysql_query("SET character_set_client=utf8");
		mysql_query("SET character_set_connection=utf8");
	}
	function InsertRecord($Table,$Field,$Value) {
		$query = "INSERT INTO ".$Table." (".$Field.") VALUES (".$Value.")";
		$result = mysql_query($query) or die("Query failed: " . mysql_error()); 
		return $result;
	}
	function SelectRecords($Field,$From,$Condition) {
		$query = "SELECT ".$Field." FROM ".$From." WHERE ".$Condition;
		$result = mysql_query($query) or die("Query failed: " . mysql_error()); 
		return $result;
	}
	function Selected($Field,$From){
		$query = "SELECT ".$Field." FROM ".$From;
                $result = mysql_query($query) or die("Query failed: " . mysql_error()); 
		return $result;
	}

}
?>

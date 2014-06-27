<?php

require(dirname(dirname(__FILE__))."/model/event_model.php");
 
function event_check($month) 
{
        $e = new Event_Model();
	   $data = $e->get_event_by_month($month);

	while($row = mysql_fetch_array($data)) {
         
		 $event_date = date("Y")."-".$row["month_date"]."-".$row["day_date"]; 
		 $diff_date = (strtotime(date("Y-m-d")) - strtotime($event_date))/  ( 60 * 60 * 24 );

		 if($diff_date >= -2 && $diff_date < 2){
			return $row["id"];
			exit;
		 }
	}
        return 0;
}

function event_show($id){
       $e = new Event_Model();
	   $data = $e->get_event_by_id($id);
        while($row = mysql_fetch_array($data)) {
            $result["title"] = $row["title"];
			$result["picture"] = $row["picture"];
	
         }
       return $result;
}

?>








	
			


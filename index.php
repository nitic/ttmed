<?php
ob_start();
require("controller/event.php");

    // Yes have event ID is 2 time on website
if(isset($_COOKIE["eventID"])){
        
	//  no event 	
	if($_COOKIE["eventID"] == "0"){
		 include("header.php");
		 include("body.php");
    }
	else{   // yes have event 
	           // yes have cookie 'sitename' is 2 time not show event page 
		if(isset($_COOKIE["siteName"])){
			 include("header.php");
		     include("body.php");
		}
		else{  // no cookie 'siteName' is first time come to website 
			 echo '<meta http-equiv="refresh" content="0;url=event.php?id='.$_COOKIE["eventID"].'">';
			 exit(0);
		 }
	}
}           // Frist time >> run once
else{   // No event ID is first time come to website
    $eventID =  event_check(date("m")); 
    setcookie("eventID",$eventID,time()+3600); 
	
	// No event 
	if($eventID == "0"){
			 include("header.php");
		     include("body.php");
	}
	else{   // Yes have event
		 echo '<meta http-equiv="refresh" content="0;url=event.php?id='.$eventID.'">';
         exit(0);
	}
	

	// Pop-Up
	// Create cookie Modal Frist time
	// 1 is open
	// 0 is close
	
	setcookie("myModalCheck",'0',time()+3600); 


	
}

?>
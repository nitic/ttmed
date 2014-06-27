<?php
ob_start();
require("controller/event.php");

$siteName = "ttmed@psu";
setcookie("siteName",$siteName,time()+600); 


$data = event_show($_GET["id"]) ;

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="th" dir="ltr">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title><?php echo $data["title"]; ?> : คณะการแพทย์แผนไทย มหาวิทยาลัยสงขลานครินทร์</title>
<link rel="stylesheet" href="css/css-17550.css" type="text/css" />
</head>

<body style="text-align:center;">
	<div class="itemImageBlock" >
            <img src="images/event/<?php echo $data["picture"]; ?>" style="margin:0px auto; "  />
	 </div>
<p>
&nbsp;
</p>
<p>
<a  href="index.php" ><button class="btn" type="button"><i class="icon-home"></i> เข้าสู่หน้าแรก / Enter Site</button></a>
  </p>
  
</body>
</html>

<?php
session_start();
require_once("../modules/authent.php");

// if already logged in redirect
if (isset($_SESSION['username'])) {
 header('Location: form.php');
}

$error = false;
 
// get log in information via post
$u_name = $_POST['username'];
$u_pass = sha1('kengi' . $_POST['password'] . md5($_POST['password']));
 
// check empty input
if (empty($u_name) || empty($u_pass)) {
 $error = true;
}
 
if (!$error) {
    // everything fine, check user info in database
	
	$e = new authent();
    $data = $e->check_user_password($u_name, $u_pass);
    $result = mysql_num_rows($data);
	 if ($result !== false && $result == 1) {
           // saved to session
		   while($row = mysql_fetch_array($data)) {
				$_SESSION['username'] = $row['username'];
			  	$_SESSION['email'] = $row['email'];
		   }
			 // redirect to other page (member.php)
			 // warning: there must no another output before this, otherwise it might failed
			print "<META HTTP-EQUIV='Refresh'  CONTENT='0;URL=form.php'>";
     }
	 else{
	  $error = true;
	}
}

if ($error) {
    // empty username or password, tell the user
    echo 'Invalid username or password.';
	print "<META HTTP-EQUIV='Refresh'  CONTENT='1;URL=index.php'>";
}

?>


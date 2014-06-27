<?php
// FILE: member.php
 
// always start with this
session_start();
 
// check log in status
if (isset($_SESSION['username'])) {
 // do anything you want
 echo 'Hello ' . $_SESSION['username'] . ' (' . $_SESSION['email'] . ')';
 echo '
';
 echo '<a href="logout.php">Log out</a>';
}
else {
 echo 'Please log in!.';
}
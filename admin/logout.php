<?php
session_start();
session_destroy();
 
echo 'Logged out';
print "<META HTTP-EQUIV='Refresh'  CONTENT='0;URL=index.php'>";

?>
<?php
session_start();
$_SESSION['login'] = '0';
echo "<h3> You have signed out !</h3><br>";
echo "<a href = \"index.php?c=default&v=default\">Return to Main page</a>"
?>

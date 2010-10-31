<?php

ini_set('display_errors', 1);
error_reporting(E_ALL | E_STRICT);
/*
function authenticate($username, $password) {
    $configVars = parse_ini_file('../config/config.ini', TRUE);
    //accessing config variable
    $uName = $configVars['Database']['username'];
    $dbPassword = $configVars['Database']['passwd'];
    $db = mysql_connect("localhost", $uName, $dbPassword);
    mysql_select_db("URLShortener", $db);
    $query ="SELECT UserID FROM Users WHERE UserName='".$username."' AND Password='".$password."'";
    $result = mysql_query($query) or die("Query failed with error: ".mysql_error());
    
    while($row = mysql_fetch_array($result)) {
        return true;
    }
    mysql_close($db);
    return false;
}
 * */
 
?>
<?php

ini_set('display_errors', 1);
error_reporting(E_ALL | E_STRICT);

function authenticate($username, $password) {
    $db = mysql_connect("localhost", "root", "");
    $query ="SELECT UserID FROM Users WHERE UserName=".$username." AND Password=".$password;
    $result = mysql_query($query);
    $num_rows = mysql_num_rows($result);
    $num_fields = mysql_num_fields($result);
    for($j =1; $j <=$num_rows; $j++)
    {
        $row = mysql_fetch_array($result);
        print $row[0].$row["some_attr"]."<br />";
    }
    mysql_close();
    /*
    $usernames = array( "sh"=>"shivang", "se"=>"sean");
    $key = array_search($username, $usernames);
    $passwords['shivang'] = "shivangshah";
    $passwords['sean'] = "seantraber";
    if($key == false)
    {
        return false;
    }
    if ($passwords[$username] == $password)
        return true;
    else
        return false;
     *
     */
}
?>
<?php

ini_set('display_errors', 1);
error_reporting(E_ALL | E_STRICT);

function authenticate($username, $password) {
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
}
?>
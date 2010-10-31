<?php
session_start();
$url = $_POST['url'];
$vanityName = $_POST['vanityName'];
$user = $_SESSION['UserID'];

if($vanityName == "" || $vanityName == null){
    //MAKE HASH IN CASE OF EMPTY VANITYSTRING
    $vanityName = sha1($url);
    //NEED FIRST SIX CHARS
    $vanityName = substr($vanityName, 0, 6);
    //BASE64 ENCODE
    $vanityName = base64_encode($vanityName);
}
    //STORE URL/HASH,VANITYSTRING PAIR IN DATABASE with hash/vanity string as key
    include '../models/URL.php';
    $newURL = new URL();
    $newURL->storeUrl($url, $vanityName,$user);
?>
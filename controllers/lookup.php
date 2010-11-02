<?php
session_start();
function lookupAndRedirect($key) {
    include 'models/URL.php';
    $newURL = new URL();
    $url = $newURL->findURL($key, $_SESSION['UserID']);
    if ($url == null) {
        echo "No key found under your user login !";
    } else {
        echo "<h3>Your key has been found/created in our database and you will be redirected in 10 seconds ! Please copy your key from here: </h3>";
        echo "<h1>$key</h1>";
        echo "redirecting to <i>$url</i>";
        echo "<head><meta http-equiv=\"REFRESH\" content=\"10;url=http://" . $url . "></HEAD>";
    }
}
?>
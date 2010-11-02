<?php
session_start();
function lookupAndRedirect($key) {
    include 'models/URL.php';
    $newURL = new URL();
    $url = $newURL->findURL($key, $_SESSION['UserID']);
    if ($url == null) {
        echo "No key found under your user login !";
    } else {
        echo "<h3>Your key has been found in our database and you will be redirected in 5 seconds !</h3>";
        echo "redirecting to <i>$url</i>";
        echo "<head><meta http-equiv=\"REFRESH\" content=\"5;url=http://" . $url . "></HEAD>";
    }
}
?>
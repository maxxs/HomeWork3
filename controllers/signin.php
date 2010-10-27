<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL | E_STRICT);
include '../models/authenticate.php';
$authenticate = authenticate($_POST["username"], $_POST["password"]);
if ($authenticate) {
    $_SESSION['login'] = '1';
    header('Location: http://localhost/hw3/index.php?c=default&v=signin_success');
} else {
    $_SESSION['login'] = '0';
    header('Location: http://localhost/hw3/index.php?c=default&v=signin_fail');
}
exit;
?>
<?php
session_start();
$configVars = parse_ini_file('../config/config.ini', TRUE);
$baseurl = $configVars['Database']['baseurl'];
ini_set('display_errors', 1);
error_reporting(E_ALL | E_STRICT);
include '../models/User.php';
$user = new User($_POST["username"], $_POST["password"]);
if ($user->authenticate()) {
    $_SESSION['login'] = '1';
    header('Location: '.$baseurl.'/index.php?c=default&v=signin_success');
} else {
    $_SESSION['login'] = '0';
    header('Location: '.$baseurl.'/index.php?c=default&v=signin_fail');
}
exit;
?>
<?php
session_start();
$configVars = parse_ini_file('../config/config.ini', TRUE);
$baseurl = $configVars['Database']['baseurl'];
include '../models/User.php';
$user = new User($_POST["username"], $_POST["password"]);
$user->setFirstName($_POST["firstName"]);
$user->setLastName($_POST["lastName"]);
$newUserID = $user->addUserToDB();
if ($newUserID != -1) {
    $_SESSION['login'] = '1';
    $_SESSION['UserID'] = $newUserID;
    header('Location: '.$baseurl.'/index.php?c=default&v=signup_success');
} else {
    $_SESSION['login'] = '0';
    header('Location: '.$baseurl.'/index.php?c=default&v=signup_fail');
}
exit;

?>

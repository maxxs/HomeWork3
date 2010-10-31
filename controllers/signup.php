<?php
//echo $_POST['username'];
//echo $_POST['password'];
include '../models/User.php';
$user = new User($_POST["username"], $_POST["password"]);
$user->setFirstName($_POST["firstName"]);
$user->setLastName($_POST["lastName"]);
$user->addUserToDB();
?>

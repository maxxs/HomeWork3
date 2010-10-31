<?php
session_start();
$headerLinks = array("signin", "signout");
if ($_SESSION['login'] == "1") {
    $headerLinks['signout'] = true;
    $headerLinks['signin'] = false;
} else {
    $headerLinks['signout'] = false;
    $headerLinks['signin'] = true;
}
if ($_REQUEST['c'] == null && $_REQUEST['v'] == null) {
    header('Location: http://localhost/hw3/index.php?c=default&v=default');
}
?>
<html>
    <head>
        <link href="css/placesToGo.css" rel="stylesheet" type="text/css">
        <link href="css/header.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="js/signup.js"></script>
        <script type="text/javascript" src="js/urlShort.js"></script>
    </head>
    <body>
        <div class="header">
            <div>
                <table class="headerTable">
                    <tr>
                        <td width="70%">
                            <div class="title">URL <i>shortner</i></div>

                        </td>
                        <td align="right">
                            <div>
                                <?php
                                if ($headerLinks['signin']) {
                                    $signin = "index.php?c=signin&v=signin";
                                    $signup = "index.php?c=signup&v=signup";
                                    echo "<pre><a href = $signin>Sign In</a> <a href = $signup>Sign Up</a></pre>";
                                } else {
                                    $signout = "index.php?c=signin&v=signout";
                                    $mystat = "index.php?c=stats&v=stats";
                                    echo "<pre><a href = $signout>SignOut</a> <a href = $mystat>My Stats</a></pre>";
                                }
                                ?>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <br>
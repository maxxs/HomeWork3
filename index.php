<?php
session_start();
include ("header.php");
?>
<div class = "body">
    <div class="column2">
            <?php
            $view = $_REQUEST['v'];
            $controller = $_REQUEST['c'];
            $key = $_REQUEST['k'];
            if($controller == "lookup")
            {
                include_once ("controllers/lookup.php");
                lookupAndRedirect($key);
            }
            else if($controller == "stats")
            {
                include_once ("controllers/stats.php");
                showStats($_SESSION['UserID']);
            }
            else
            {
                include_once ("views/$view.php");
            }
            ?>
    </div>
</div>
</body>
</html>
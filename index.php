<?php
include("header.php");
?>
<div class = "body">
    <div class="column2">
            <?php
            $view = $_REQUEST['v'];
            include_once ("views/$view.php");
            ?>
    </div>
</div>
</body>
</html>
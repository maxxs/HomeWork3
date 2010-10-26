<?php
include("header.php");
include("controllers/main.php");
?>
<div class = "body">
    <div class="column1">
        <ul>
            <?php
            $view = $_REQUEST['v'];
            if ($_REQUEST['c'] == "main") {
                $links = readLinksFromPage($_REQUEST['p']);
                $titles = readTitlesFromPage($_REQUEST['p']);
            }
            for ($i = 0; $i < count($links); $i++) {
                echo "<li><a href=" . $links[$i] . ">" . $titles[$i] . "</a></li>";
            }
            ?>
        </ul>
    </div>
    <div class="column2">
        <h3>
            <?php
            $view = $_REQUEST['v'];
            include_once ("views/$view.php");
            if ($_REQUEST['c'] == "main") {
                read($_REQUEST['p']);
            }
            ?>
        </h3>
    </div>
</div>
</body>
</html>
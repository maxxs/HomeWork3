<?php

class stats {

    function showData($userID) {
        $configVars = parse_ini_file('config/config.ini', TRUE);
//accessing config variable
        $uName = $configVars['Database']['username'];
        $dbPassword = $configVars['Database']['passwd'];
        $db = mysql_connect("localhost", $uName, $dbPassword);
        mysql_select_db("URLShortener", $db);
        $query = "SELECT Hash,URL FROM urls WHERE UserID='" . $userID . "'";
        $result = mysql_query($query) or die("Query failed with error: " . mysql_error());
        $num = mysql_numrows($result);
        echo "<table width = \"100%\" border = \"1\">";
        echo "<tr>";
        echo "<th>Hash</th><th>URL</th></tr>";
        while ($i < $num) {
            $hash = mysql_result($result, $i, "Hash");
            $urlLink = mysql_result($result, $i, "URL");
            echo "<tr>";
            echo "<td align = \"center\">$hash</td>";
            echo "<td align = \"center\">$urlLink</td>";
            echo "</td>";
            $i++;
        }
        echo "</table>";
        echo "<a href = \"index.php?c=default&v=default\">Return to Main page</a>";
        mysql_close($db);
    }
}
 ?>
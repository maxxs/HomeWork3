<?php
class URL {
    var $url;
    var $vanityName; //Either a hash or a vanity name
    var $user;
   //constructor to create new url/hash pairing
    function construct($url, $newurl) {
        $this->url = $url;
        $this->hash = $hash;
    }
    public function setUser($id) {
        $this->user = $id;
    }
    public function getUser() {
        return $this->user;
    }
    public function getHash() {
        return $this->hash;
    }
    public function getUrl() {
        return $this->_url;
    }
    public function storeUrl($url, $vanityName, $user) {
        $this->url = $url;
        $this->vanityName = $vanityName;
        $this->user = $user;
        $configVars = parse_ini_file('../config/config.ini', TRUE);
        //accessing config variable
        $uName = $configVars['Database']['username'];
        $dbPassword = $configVars['Database']['passwd'];
        $db = mysql_connect("localhost", $uName, $dbPassword);
        mysql_select_db("URLShortener", $db);
        $query = "INSERT INTO `urlshortener`.`urls` (`Hash`, `URL`, `UserID`) VALUES (\"" . $vanityName . "\",\"" . $url . "\", '" . $user . "')";
        $result = mysql_query($query) or die("Query failed with error: " . mysql_error());
    }
    /**
     * Find the url to redirect when user supplies a vanityName as key
     * @param <String> $vanityName
     */
    public function findURL($key, $userId) {
        $configVars = parse_ini_file('config/config.ini', TRUE);
        //accessing config variable
        $uName = $configVars['Database']['username'];
        $dbPassword = $configVars['Database']['passwd'];
        $db = mysql_connect("localhost", $uName, $dbPassword);
        mysql_select_db("URLShortener", $db);
        $query = "SELECT Hash,URL FROM urls WHERE UserID='" . $userId . "' and Hash='" . $key . "'";
        $result = mysql_query($query) or die("Query failed with error: " . mysql_error());
        $url = null;
        $row = null;
        $row = mysql_fetch_array($result);
        if($row == null)
        {
            mysql_close($db);
            return null;
        }
        else
        {
            mysql_close($db);
            $url = $row['URL'];
            //$_SESSION['UserID'] = $row['UserID'];
            return $url;
        }
    }
}
?>
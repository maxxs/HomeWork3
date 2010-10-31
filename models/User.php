<?php

class User {
    //put your code here
    var $userID;
    var $username;
    var $password;
    var $firstName;
    var $lastName;


    //used when reading user info from database.
    /**
     * @param <type> $id
     * @param <type> $name
     * @param <type> $pword
     * @abstract blas
     * @param int $id
     * @param string $name
     * @param string $pword
     */
    /*
    function User($first, $last, $uname, $pword) {
        $this->firstName = $first;
        $this->lastName = $last;
        $this->username = $uname;
        $this->password = $pword;
    }
    */
    //used when adding new user info to database.
    /**
     * @param string $name
     * @param string $pword
     */
    function User($name, $pword) {
        $this->username = $name;
        $this->password = $pword;
    }

    public function getUserID() {
        return $this->userID;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setFirstName($first) {
        $this->firstName = $first;
    }

    public function setLastName($last) {
        $this->lastName = $last;
    }

    public function authenticate() {
        $configVars = parse_ini_file('../config/config.ini', TRUE);
        //accessing config variable
        $uName = $configVars['Database']['username'];
        $dbPassword = $configVars['Database']['passwd'];
        $db = mysql_connect("localhost", $uName, $dbPassword);
        mysql_select_db("URLShortener", $db);
        $query ="SELECT UserID FROM Users WHERE UserName='".$this->username."' AND Password='".$this->password."'";
        $result = mysql_query($query) or die("Query failed with error: ".mysql_error());
        $row = null;
        $row = mysql_fetch_array($result);
        if($row == null)
        {
            mysql_close($db);
            return false;
        }
        else
        {
            mysql_close($db);
            $_SESSION['UserID'] = $row['UserID'];
            return true;
        }
   

    }

    private function checkUserName() {
        $configVars = parse_ini_file('../config/config.ini', TRUE);
        //accessing config variable
        $uName = $configVars['Database']['username'];
        $dbPassword = $configVars['Database']['passwd'];
        $db = mysql_connect("localhost", $uName, $dbPassword);
        mysql_select_db("URLShortener", $db);
        $query ="SELECT UserID FROM Users WHERE UserName='".$this->username."'";
        $result = mysql_query($query) or die("Query failed with error: ".mysql_error());
        $row = null;
        $row = mysql_fetch_array($result);
        if($row == null)
        {
            mysql_close($db);
            return false;
        }
        else
        {
            mysql_close($db);
            return true;
        }
    }

    public function addUserToDB() {

        if ($this->checkUserName()) {
            return -1;
        }
        else {

            $configVars = parse_ini_file('../config/config.ini', TRUE);
            //accessing config variable
            $uName = $configVars['Database']['username'];
            $dbPassword = $configVars['Database']['passwd'];
            $db = mysql_connect("localhost", $uName, $dbPassword);
            mysql_select_db("URLShortener", $db);
            $query = "INSERT INTO Users (FirstName, LastName, UserName, Password) VALUES ('".$this->firstName."', '".$this->lastName."', '".$this->username."', '".$this->password."')";
            $result = mysql_query($query);

            $ID = mysql_insert_id();

            mysql_close($db);
            
            return $ID;
        }

    }

}
?>

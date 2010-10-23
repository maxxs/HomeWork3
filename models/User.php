<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author smtraber
 */
class User {
    //put your code here
    var $userID;
    var $username;
    var $password;


    //used when reading user info from database.
    /**
     *
     * @param int $id
     * @param string $name
     * @param string $pword
     */
    function _construct($id, $name, $pword) {
        $this->userID = $id;
        $this->username = $name;
        $this->password = $pword;
    }

    //used when adding new user info to database.
    /**
     *
     * @param string $name
     * @param string $pword
     */
    function _construct($name, $pword) {
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

}
?>

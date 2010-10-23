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
<<<<<<< HEAD
     * @param <type> $id
     * @param <type> $name
     * @param <type> $pword
     * @abstract blas
=======
     * @param int $id
     * @param string $name
     * @param string $pword
>>>>>>> 5c431b7330ce2658344cf276c0cabc6deb0e793b
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

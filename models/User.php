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
    function _construct($id, $name, $pword) {
        $this->userID = $id;
        $this->username = $name;
        $this->password = $pword;
    }

}
?>

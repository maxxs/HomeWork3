<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of URL
 *
 * @author smtraber
 */
class URL {
    //put your code here

    var $_url;
    var $hash;
    var $user;

    //constructor to create new url/hash pairing
    function _construct($url, $hash) {
        $this->_url = $url;
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
}
?>

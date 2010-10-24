<?php
Abstract Class someController{
    protected $user;

    function __construct($user){
        #this->user = $user;
    }

    abstract function index();

    abstract function index2lala();
}
?>

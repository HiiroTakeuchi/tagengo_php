<?php
require_once("fruits.php");

class ichigo extends fruits{
    function __construct(){
        $this->min_price = 400;
        $this->max_price = 500;
        $this->name = "苺";
    }
}
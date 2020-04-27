<?php
require_once("fruits.php");

class momo extends fruits{
    function __construct(){
        $this->min_price = 200;
        $this->max_price = 300;
        $this->name = "桃";
    }
}
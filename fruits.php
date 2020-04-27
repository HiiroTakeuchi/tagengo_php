<?php

class fruits{
    protected $name = "";
    protected $price = "";
    protected $min_price = "";
    protected $max_price = "";
    protected $amount = 15;
    protected $all = array();
    protected $i = "";
    
    function ReturnPrice(){
        for($i=1;$i<=$this->amount;$i++){
            $this->price = mt_srand();
            $this->price = mt_rand($this->min_price,$this->max_price);
            echo $i."個目は".$this->price."円<br>";
            $this->all[$i] = $this->price;


        }
        
    }
    function ReturnAverage(){
        echo $this->name."の平均金額は". round((array_sum($this->all) / count($this->all)))."円<br>";

    }
    function ReturnMaxMinPrice(){
        echo "最高金額は、".max($this->all)."円<br>";
        echo "最低金額は、".min($this->all)."円<br>";
    }
}
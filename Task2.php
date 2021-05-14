<?php

class item {

    private $price;
    private $quantity;
    private $method;
    static $aba;
    static $piPaynWing;

    function set_detail($quantity,$method,$price) {
        if($method==='ABA'){
            self::$aba+=$quantity;
        }
        else if($method==='Wing' || $method==='PiPay'){
            self::$piPaynWing+=$quantity;
        }
    }

    public function sales($price,$quantity){
        $this->totalPerOrder = $price * $quantity;
    }  

    function get_quantity() {
        return $this -> quantity;
    }

    function get_sales() {
        return $this -> sales;
    }   

    public static function get_aba(){
        return self::$aba;
    }

    public static function get_piPaynWing(){
        return self::$piPaynWing;
    }
    public function get_price() {
        return self::$price;
    }

}

item::$aba=0;
item::$piPaynWing=0;

$item1 = new item();
$item1 -> set_detail(1,'ABA',5); 

$item2 = new item();
$item2 -> set_detail(2,'Wing',3); 

$item3 = new item();
$item3 -> set_detail(1,'ABA',4); 

$item4 = new item();
$item4 -> set_detail(1,'ABA',5); 

$item5 = new item();
$item5 -> set_detail(1,'PiPay',6); 

$item6 = new item();
$item6 -> set_detail(1,'ABA',10); 

$item7 = new item();
$item7 -> set_detail(1,'Wing',15); 

$item8 = new item();
$item8 -> set_detail(1,'Wing',2); 



echo "1. Numbers of sales by ABA method ". item::get_aba(). "\n";
echo "2. Numbers of sales by Wing or PiPay method ". item::get_piPaynWing(). "\n";
echo "3. All sales ordering by biggest total amount \n". item::get_sales();


?>
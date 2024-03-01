<?php

    class staticDemo{
        public static $pi = 3.14;
        private $val = 0;
        public function display(){
            echo " value of pi is :".self::$pi;
        }
        public function __set($val,$value){
            self::$pi = $value;
            echo "<br>value is set to private variable successfully :".self::$pi;
        }
        public function __get($name){

            echo "<br> value of pi now is :". self::$pi;
        }
        public function __call($funcName,$args){
            echo "<br>no such with name :$funcName and parameters:";
        foreach( $args as $items)
        {
            echo "<br> $items";
        }
        }
        public static function __callStatic($method, $args){
            echo " <br> no such function name  :$method is present and arguments is :";
            echo "<pre>";
            print_r($args);
            echo"</pre";

        }
    }

$obj = new StaticDemo();
$obj->display();
$obj->disco = 3.111;
$obj->get;
$obj->hello(1,2,3,4,5);
$obj->s1(12321,213123,421);

staticDemo::hello("Ghost","Do","You","Copy....");
?>
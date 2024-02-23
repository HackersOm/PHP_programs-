<?php
class Demo{
    public $first,$second;
    function __construct($x = 1,$y = 2){
        $this->first = $x;
        $this->second = $y;
    }

    public function get(){
        echo "First number is :$this->first and second number is :$this->second";
    }

}
$demo = new Demo();
$demo->get();
?>
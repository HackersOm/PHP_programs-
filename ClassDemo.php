<?php

    class hello {
        public $first,$second,$cal;
        
        public function set($x,$y){
            $this->first = $x;
            $this->second=$y;

        }
        public function get(){
            echo " First value is :$this->first and second value is :$this->second";
        }

    }

    class Bhai extends hello{
        
        public function calculate(){
        $result= $this->first + $this->second;
        echo "<br><br>Result is :$result";
        }
    }

$bh = new Bhai();
$bh->set(100,2);
$bh->get();
$bh->calculate();

?>

<?php

    $str = "Me Tare Dushma Dushma Saapra Maaa Nagin tu Saapra";
    $a = explode(" ",$str);
     foreach( $a as $v){
        echo "   $v "."<br>";
    }

    $s = array("S","H","R","E","Y","A","S");
    $h = implode('...........',$s);
    echo "$h";
?>
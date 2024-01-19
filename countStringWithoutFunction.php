<?php
function hello($str)
{
    $word = 1;
    if($str !=" ")
    {

        for($i = 0 ;$i<strlen($str);$i++)
        {
            $str = trim($str);
            if($str[$i] == " " )
            {
                $word++;
            }
            
        }
        return $word;
    }
    return null;
}
$str = " string working is sample        u";
$count = hello($str);
if($count){
    echo " count is :$count";
}

else{
    echo " Please enter valid sentence  ";
}
?>
<?php

$std= [
      
    [20,"shreyash","Tyco"],
    [27,"Om","Tyco"],
    [4,"Bhushan","Tymk"],
    [7,"Ram","Tyme"],

];
echo"<pre>";
print_r($std);
echo"</pre>";
echo"<table border='5px'>";
echo"<tr>
    <th> Roll no </th>
    <th> Name </th>
    <th> Class </th>
    </tr>";

  foreach($std as $X1)
  {
    echo"<tr>";
    foreach($X1 as $X2)
    {
        echo"<td>".$X2."</td>";
        
    }
    echo"</tr>";
  }
  ?>
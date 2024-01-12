<?php
    $arr2D = array(
        array(1,2,3,4,5),
        array("hello","world","limited","working","Nice"),
        array(2.2,4.2,44.5,12.6,3.3)
    );


    echo"<Table border = '5px'>";
    echo"<tr>
            <th>Column1</th>
            <th>Column2</th>
            <th>Column3</th>
            <th>Column4</th>
            <th>Column5</th>
         </tr>
         ";
    

    for($i=0;$i<3;$i++)
  {
    echo "<tr>";

    for($j = 0 ;$j<5;$j++)
        {
            echo " <td>".$arr2D[$i][$j]."</td>";
        }
        echo " <tr>";
    }



?>
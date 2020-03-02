<?php
   
    $array=["baseball","avion,base,vol,val,baal,ball,balon"];
    $palabra=explode(",",$array[1]);
    
    echo "Array: ".implode("-",$array)."<br>";


    echo "Palabra deseada: ".$array[0]."<br>";
    echo " Posibles opciones: ".$array[1]."<br>";

 
    for($i=0;$i<count($palabra);$i++)
    {
        for($j=0;$j<count($palabra);$j++)
        {
            if ($j!=$i)
            {
                $tmp=$palabra[$i].$palabra[$j];
                
                if ($tmp==$array[0])
                     
                     echo "Palabra formada: ".$palabra[$i].",".$palabra[$j];
            }
        }
    }
    ?>
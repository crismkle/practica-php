<?php

    $valor1 = 4;
    $valor2 = 11;

    echo "Pares entre $valor1 y $valor2 <br><br>";

    for ($i=$valor1; $i<=$valor2; $i++){
        if ($i % 2 == 0) 
            echo $i . "<br>";
    }

?>
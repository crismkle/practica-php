<?php

    function calcularPromedio($numeros){
        $sum = 0;
        for($i=0; $i<sizeof($numeros); $i++){
            $sum += $numeros[$i];
        }
        return $sum / sizeof($numeros);
    }

    $numeros = [2, 3, 8, 7, 5, 6, 9, 4, 10];
    for($i=0; $i<sizeof($numeros); $i++)
        echo $numeros[$i] . " ";

    echo "<br><br>Promedio: " . calcularPromedio($numeros);

?>
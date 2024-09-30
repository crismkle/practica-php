<?php

    function calculadora($num1, $num2, $operacion){
        if ($operacion == '+')
            return $num1 + $num2;
        elseif ($operacion == '-')
            return $num1 - $num2;
        elseif ($operacion == '*')
            return $num1 * $num2;
        elseif ($operacion == '/')
            return $num1 / $num2;
        else
            echo "Operación no encontrada.";
    }

    echo calculadora(12, 5, "*");

?>
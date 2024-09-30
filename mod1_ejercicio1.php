<?php
    function verificarNumero($numero){

        if (is_int($numero) and $numero > 1){
            $primo = true;
            $par = true;

            // Busca un divisor para $numero, si lo encuentra no es primo y termina el for
            for($i=2; $i < $numero; $i++){
                if ($numero % $i == 0){
                    $primo = false;
                    break;
                }
            }
            // Se fija si es impar
            if ($numero % 2 != 0)
                $par = false;

            // Devuelve un arreglo con los dos valores
            return array("es_primo" => $primo, "es_par" => $par);
        
        }else{
            return array("es_primo" => false, "es_par" => false);
        }
    }

    // IF para que no se ejecute este código al ser llamando por ejercicio2
    if (basename(__FILE__) == basename($_SERVER['PHP_SELF'])) {
        $valor = 17;
        $resultado = verificarNumero($valor);
        echo "---  Ejercicio 1  ---<br><br>";
        echo "Numero ". $valor . "<br><br>";
        echo "Es primo: " . ($resultado["es_primo"] == 1 ? 'Sí' : 'No') . "<br><br> Es par: " . ($resultado["es_par"] == 1 ? 'Sí' : 'No') . "<br><br>";
    }

?>
<?php
    require_once('ejercicio1.php');
    
    function primosEntreValores($inicio, $fin){
        $primos = [];
        $primos_par = [];
        $primos_impar = [];

        if ($inicio > 1 and $fin > 1){
            // Si están invertidos, los da vuelta
            if ($fin < $inicio){
                $temp = $inicio;
                $inicio = $fin;
                $fin = $temp;
            }
            
            // Recorre los números entre inicio y fin llamando a verificarNumero para verificar paridad y si es primo
            for ($i=$inicio; $i <= $fin; $i++){
                $arreglo = verificarNumero($i);
                if ($arreglo["es_primo"] == 1){
                    if ($arreglo["es_par"] == 1)
                        $primos_par[] = $i;
                    else
                        $primos_impar[] = $i;
                    $primos[] = $i;
                }
            }

            echo "<br>Total primos encontrados: " . count($primos) . "<br>";
            echo "<br>Total primos pares: " . count($primos_par) . "<br>";
            echo "<br>Total primos impares: " . count($primos_impar) . "<br>";
        }else
            echo "Las variables inicio y fin deben ser mayores a 1";
    }

    $ini = 2;
    $fin = 19;
    echo "---  Ejercicio 2 ---<br><br>";
    echo "Primos entre el $ini y el $fin<br>";
    primosEntreValores($ini, $fin);

?>
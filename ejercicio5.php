<?php

    $n = 12;
    echo "Números primos para $n:<br><br>";

    for($i=2; $i<=$n; $i++){
        $isPrime = true;
        for($j=2; $j<$i; $j++){
            if($i % $j == 0)
                $isPrime = false;
        }
        if($isPrime)
            echo $i . " ";
    }

?>
<?php
    $numero = 15;
    $arreglo = [];

    for($i=2; $i<=9; $i++){
        if($numero % $i == 0)
            $arreglo[] = $i;
    }

    echo "Múltiplos de $numero: ";
    for ($i=sizeof($arreglo)-1; $i>=0; $i--){
        echo $arreglo[$i] . " ";
    }
        

?>
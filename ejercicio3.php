<?php

    $arreglo = [3, 5, 8, 2, 12, 7, 6, 18, 13, 9];

    for($i=0; $i<sizeof($arreglo); $i++)
        echo $arreglo[$i] . " ";

    for($i=0; $i<sizeof($arreglo); $i++){
        if ($arreglo[$i] % 2 == 0)
            $arreglo[$i] = "PAR";
    }
    echo "<br><br>";
    for($i=0; $i<sizeof($arreglo); $i++)
        echo $arreglo[$i] . " ";

?>
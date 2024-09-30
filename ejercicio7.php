<?php

    function contarPalabras($texto){
        return count(explode(" ", $texto));
    }

    echo contarPalabras("Estoy programando en PHP duh");

?>
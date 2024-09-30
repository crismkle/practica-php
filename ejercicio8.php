<?php

    function generarContraseña($longitud){
        $base = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        return substr(str_shuffle($base),0, $longitud);
    }

    echo "Nuevo contraseña: " . generarContraseña(25);

?>
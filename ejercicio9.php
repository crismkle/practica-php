<?php

    function validadCorreo($correo){
        if (str_contains($correo, '@') and str_contains($correo, '.com'))
            return true;
        else
            return false;
    }

    $resultado = (validadCorreo("hotsence85@gmail.com") == true) ? "Sí" : "No";
    echo "Dirección válida: $resultado";

?>
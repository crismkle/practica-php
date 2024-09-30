<?php

    $horas = 3;
    $minutos = 118;
    $segundos = 195;
    echo "Hora original: $horas h $minutos m $segundos s";

    $segundos_new = $segundos % 60;

    $minutos_new = $minutos + intdiv($segundos, 60);
    $minutos_new_temp = $minutos_new;
    $minutos_new = $minutos_new % 60;
    
    $horas_new = $horas + intdiv($minutos_new_temp, 60);
    
    echo "<br><br>Hora nueva: $horas_new h $minutos_new m $segundos_new";

?>
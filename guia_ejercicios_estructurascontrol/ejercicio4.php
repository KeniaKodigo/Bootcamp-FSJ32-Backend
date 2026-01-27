<?php

//scope de variables (alcance)
function calcularCostoLlamada($clave, $minutos){
    $costo_llamada = 0;

    switch($clave){
        case 12:
            $costo_llamada = descuentoTotalLlamada($minutos, 2);
            break;
        case 15:
            $costo_llamada = descuentoTotalLlamada($minutos, 2.20);
            break;
        case 18:
            $costo_llamada = descuentoTotalLlamada($minutos, 4.50);
            break;
        case 19:
            $costo_llamada = descuentoTotalLlamada($minutos, 3.50);
            break;
        case 23:
            $costo_llamada = descuentoTotalLlamada($minutos, 6);
            break;
        case 25:
            $costo_llamada = descuentoTotalLlamada($minutos, 6);
            break;
        case 29:
            $costo_llamada = descuentoTotalLlamada($minutos, 5);
            break;
    }

    echo "
        Su clave es: " . $clave . 
        "<br>Minutos Hablados: " . $minutos .
        "<br>El costo de la llamada fue: $" . $costo_llamada;
}

function descuentoTotalLlamada($minutos, $precio){
    $costo_llamada = $minutos * $precio;
    if($minutos <= 30){
        $costo_llamada =  $costo_llamada - ($costo_llamada * 0.10); 
    }
    return $costo_llamada;
}

calcularCostoLlamada(29, 32);
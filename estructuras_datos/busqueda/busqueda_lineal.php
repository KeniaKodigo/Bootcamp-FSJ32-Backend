<?php

function busquedaLineal($arreglo, $valor) {
    for ($i = 0; $i < count($arreglo); $i++) {
        if ($arreglo[$i] == $valor) {
            return $i;
        }
    }
    return -1;
}

print_r(busquedaLineal([2,6,9,4,3,2], 2));
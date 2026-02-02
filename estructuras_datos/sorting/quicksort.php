<?php

function quicksort($array){

    #evaluando si el arreglo tiene un elemento
    if(count($array) <= 1){
        return $array;
    }else{
        $pivote = $array[0];
        $left = [];
        $right = [];

        for($i = 1; $i < count($array); $i++){
            if($array[$i] < $pivote){
                //si es menor que el pivote, agregamos el elemento a la izquierda
                array_push($left, $array[$i]);
            }else{
                array_push($right, $array[$i]);
            }
        }

        //una vez divido el arreglo original lo fusionamos con el arreglo de la izquierda + pivote + derecha
        //y hacemos la recursion (llamamos la misma funcion dentro de ella misma para volver hacer el mismo proeso con el arreglo de la izquierda y derecha)
        return array_merge(quicksort($left), array($pivote), quicksort($right));
    }
}

print_r(quicksort([2,6,9,4,3,2]));
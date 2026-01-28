<?php

function bubbleSort($array){
    $contador = 0;
    //count() = devuelve el tamano de un arreglo
    for($i = 0; $i < count($array); $i++){
        //segundo ciclo
        for($j = 0; $j < count($array) - 1; $j++){
            //el segundo se va encargar de evaluar las posiciones y hacer los intercambios
            print_r($array);
            $contador++;
            echo "<br><br>";
            if($array[$j] > $array[$j + 1]){
                //si es mayor hacemos el swap
                $temporal = $array[$j + 1];
                $array[$j + 1] = $array[$j];
                $array[$j] = $temporal;
            }
        }
    }

    //print_r($array);
    echo "Total de iteraciones: " . $contador;
}

bubbleSort([2,6,9,4,3,2]);
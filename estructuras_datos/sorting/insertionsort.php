<?php

function insertionSort($array){

    for($i = 0; $i < count($array); $i++){

        $punto_interseccion = $array[$i]; //este valor sera el encargado de compararse con posiciones anteriores
        $j = $i - 1;
        /**
         * [2,6,9,4,3,2]
         * 
         */

        while($j >= 0 && $punto_interseccion < $array[$j]){
            print_r($array);
            echo "<br><br>";
            //si las 2 condiciones se cumplen va ver un swap
            $array[$j + 1] = $array[$j];
            $array[$j] = $punto_interseccion;
            $j = $j - 1;
        }
    }

    //print_r($array);
}


insertionSort([2,6,9,4,3,2]);
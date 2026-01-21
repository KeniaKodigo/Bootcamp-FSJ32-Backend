<?php

#Fibonacci

//el parametro $numero va indicar el tamaño de mi arreglo 
function fibonacci($numero){

    $array_fibonacci = [0,1];

    for($i = 2; $i <= $numero; $i++){
        //agregando elementos al arreglo
        /**
         * [0] = 0
         * [1] = 1
         * [2] = 1
         * [3] = 2
         * [4] = 3
         * [5] = 5
         */
        $array_fibonacci[$i] = $array_fibonacci[$i - 1] + $array_fibonacci[$i - 2];
    }

    print_r($array_fibonacci);
}

fibonacci(5);
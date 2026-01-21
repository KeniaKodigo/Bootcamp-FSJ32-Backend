<?php

/**
 * Problema de Suma de Números Pares: 
 * Crea un script que sume todos los números pares en un array de números enteros.
 */
function sumaPares(){

    $array_numbers = [3,6,19,24,12,56,7,4,10];
    $suma = 0;

    //count = devuelve el tamano del arreglo
    for($i=0; $i < count($array_numbers); $i++){
        //como se que un numero es par? => mod 2 == 0
        if($array_numbers[$i] % 2 == 0){
            //echo $array_numbers[$i] . "<br>";
            $suma += $array_numbers[$i];
        }
    }   
    echo "La suma de los pares es: " . $suma;
}

sumaPares();
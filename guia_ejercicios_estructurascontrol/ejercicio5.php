<?php

function fizzbuzz($n){
    $array_fizzbuzz = [];

    //iteramos los numeros hasta llegar a $n
    for($i=1; $i <= $n; $i++){
        
        if($i % 3 == 0 && $i % 5 == 0){
            //fizzbuzz
            $array_fizzbuzz[] = "Fizzbuzz";
        }else if($i % 3 == 0){
            //fizz
            $array_fizzbuzz[] = "Fizz";
        }else if($i % 5 == 0){
            //buzz
            $array_fizzbuzz[] = "buzz";
        }else{
            //numero
            $array_fizzbuzz[] = $i;
        }
    }

    print_r($array_fizzbuzz);
}

fizzbuzz(15);
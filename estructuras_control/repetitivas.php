<?php

# ESTRUCTURAS REPETITIVAS

// Uso del bucle for
function tablaMultiplicar($tabla){
    /**
     * primer elemento = inicializamos el contador
     * segundo elemento = la condicion sobre hasta donde va llegar el contador
     * tercer elemento = incremento/decremento del contador
     */
    for($i = 1; $i <= 10; $i++){
        $resultado = $tabla * $i;
        echo $tabla . "*" . $i . "=" . $resultado . "<br>";
    }
}

tablaMultiplicar(10);

# Uso del while
function contarWhile(){
    $contador = 1;

    while($contador <= 10){
        echo $contador . " ";
        $contador++;
    }
}
echo "<br>";
contarWhile();


# Uso del do while
function contarDOWhile(){
    $contador = 1;

    do{
        echo $contador . " ";
        $contador++;
    }while($contador <= 10);
}
echo "<br>";
echo "<h4>UTILIZANDO DO WHILE</h4>";
contarDOWhile();

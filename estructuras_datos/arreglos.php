<?php

#los arreglos son colecciones de datos que tiene un orden secuencial
#En php, existen 3 tipos de arreglos

echo "<h3>Arreglo indexado</h3>"; //es cuando el arreglo tiene posicion numerica
$frutas = ["🍓", "🍇","🍍","🍐"]; //arreglo de tipo cadena
$edades = [15,19,23,18,19,21]; //arreglos de tipo numerico

print_r($frutas);
echo "<br>";
#en un arreglo podemos acceder a travez de la posicion numerica
echo $frutas[2];

#las estructuras de datos pueden sufrir cambios
#agregando una nueva fruta
array_push($frutas, "🍉");
echo "<br>";
print_r($frutas);
echo "<br>";


#eliminando la primera fruta
array_shift($frutas);
echo "<br>";
print_r($frutas);
echo "<br>";

echo "<h3>Arreglo asociativo</h3>"; //trabajamos a travez de claves/llaves en vez de posiciones numericas

$fresa = [
    "color" => "rojo",
    "forma" => "corazon",
    "sabor" => "dulce"
];

print_r($fresa);
echo "<br>";
#accediendo a travez de las claves del arreglo asociativo
echo $fresa["sabor"];
array_push($fresa, ["tamano" => "mediana"]);
echo "<br>";
print_r($fresa);

echo "<h3>Arreglo multidimensional (matrices)</h3>"; //perimite organizar datos en filas y columnas

$matriz = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

print_r($matriz);
echo "<br>";

#accediendo al primer elemento
print_r($matriz[2]);

echo "<h3>Simulando un arreglo de objetos</h3>";
#creando un arreglo asociativo + multidimensional
$matriz_frutas = [
    "🍓" => [
            "color" => "rojo",
            "forma" => "corazon",
            "sabor" => "dulce"
        ],

    "🍇" => [
            "color" => "morado",
            "forma" => "ovalada",
            "sabor" => "dulce y amargo"
        ],

    "🍐" => [
            "color" => "verde",
            "forma" => "ovalada",
            "sabor" => "agrio"
        ]
];

print_r($matriz_frutas);
echo "<br>";
#accediendo a los elementos de la matriz
echo "Accediendo a la informacion de la pera: ";
print_r($matriz_frutas["🍐"]);
<?php

# PILA: es una estructura de datos que sigue el principio de LIFO (ultimo en entrar, primero en salir)
echo "<h2>Aplicando una Pila</h2>";
echo "<p>Ultimo dato en entrar, es el primero en salir</p>";
$pila = [];

# ingresando datos al arreglo
array_push($pila, "tarea 1");
array_push($pila, "tarea 2");
array_push($pila, "tarea 3");
array_push($pila, "tarea 4");

print_r($pila);
echo "<br>";
# salida de datos (tiene que salir el ultimo que entro)
//elimina / devuelve el ultimo elemento del arreglo
$elemento = array_pop($pila);
echo "<b>El primero en salir es: </b>" . $elemento;
echo "<br>";

print_r($pila);
echo "<br>";
$elemento = array_pop($pila);
echo "<b>El primero en salir es: </b>" . $elemento;
echo "<br>";

print_r($pila);
echo "<br>";
$elemento = array_pop($pila);
echo "<b>El primero en salir es: </b>" . $elemento;
echo "<br>";

print_r($pila);
echo "<br>";
$elemento = array_pop($pila);
echo "<b>El primero en salir es: </b>" . $elemento;
echo "<br>";

# Aplicando otro ejemplo de como utilizar una PILA
echo "<h3>Aplicando una pila con la clase SplStack (PHP)</h3>";
$pila2 = new SplStack();

//agregar datos a la pila
$pila2->push("ticket 1");
$pila2->push("ticket 2");
$pila2->push("ticket 3");

print_r($pila2);

$elemento = $pila2->pop();
echo "<b>El primero en salir es: </b>" . $elemento;
echo "<br>";
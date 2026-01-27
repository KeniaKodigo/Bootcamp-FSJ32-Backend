<?php

# COLA: es una estructura de datos que sigue el principio de FIFO (primero en entrar, primero en salir)
echo "<h2>Aplicando una Cola</h2>";
echo "<p>Primer dato en entrar, es el primero en salir</p>";
$cola = [];

# ingresando datos al arreglo
array_push($cola, "ticket 1");
array_push($cola, "ticket 2");
array_push($cola, "ticket 3");
array_push($cola, "ticket 4");

print_r($cola);
echo "<br>";
# salida de datos (tiene que salir el ultimo que entro)
//elimina / devuelve el primer elemento del arreglo
$elemento = array_shift($cola);
echo "<b>El primero en salir es: </b>" . $elemento;
echo "<br>";

print_r($cola);
echo "<br>";
$elemento = array_shift($cola);
echo "<b>El primero en salir es: </b>" . $elemento;
echo "<br>";

print_r($cola);
echo "<br>";
$elemento = array_shift($cola);
echo "<b>El primero en salir es: </b>" . $elemento;
echo "<br>";

print_r($cola);
echo "<br>";
$elemento = array_shift($cola);
echo "<b>El primero en salir es: </b>" . $elemento;
echo "<br>";

# Aplicando otro ejemplo de como utilizar una COLA
echo "<h3>Aplicando una cola con la clase SplQueue (PHP)</h3>";
$cola2 = new SplQueue();

//agregar datos a la pila
$cola2->enqueue("elemento 1");
$cola2->enqueue("elemento 2");
$cola2->enqueue("elemento 3");

print_r($cola2);

$elemento = $cola2->dequeue();
echo "<b>El primero en salir es: </b>" . $elemento;
echo "<br>";
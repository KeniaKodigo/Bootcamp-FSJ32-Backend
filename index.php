<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Introduccion a PHP</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, minus.</p>

    <!-- Especificando codigo PHP (sintaxis) -->
    <?php 
        //agregando un comentario en linea
        # otra forma de comentar en linea
        /**
         * agregando un comentario con varias lineas
         */

        # PHP es un lenguaje de programacion debilmente tipado
        # declarando variables y tipos de datos
        echo "<h4>Sintaxis de PHP</h4>";
        $nombre = "Kenia"; //string
        $apellido = "Paiz"; //string
        $edad = 25; //int
        $decimal = 10.4; //float / double
        $esEmpleado = false; //boolean (true/false)
        $dato = null; //null

        //tipos de datos avanzados (arreglo/objetos)

        #declaran arreglos
        $carrito = ["pantalon","calcetines","camisa"];
        $frutas = array("fresa","melon","mandarina");
        $notas = [8,7.5,9,10];

        #declarando un objeto (en este caso en PHP utilizamos POO para los objetos)
        class Pantalon{
            public $color;
            public $talla;
            public $marca;
        }

        //creando un objeto
        $pantalon1 = new Pantalon();
        $pantalon1->color = "Gris";
        $pantalon1->talla = ["s","m","l", "xl"];
        $pantalon1->marca = "cat";

        /**
         * echo es una funcion de php que permite imprimir cadenas, variables
         */
        echo $carrito[1];
        echo "<br>";
        //para concatenar utilizamos punto (.)
        echo "Mi nombre es: " . $nombre . " " . $apellido;

    ?>
    
</body>
<script src="./main.js"></script>
</html>
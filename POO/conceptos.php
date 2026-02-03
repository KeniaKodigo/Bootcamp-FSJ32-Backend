<?php

class Persona{
    #nombre, edad, color de ojos, color de piel
    #declarando atributos de la clase
    public string $nombre;
    public int $edad; 
    public string $color_ojos;
    public string $color_piel;

    #declarando un constructor
    public function __construct($name, $age, $color_eyes, $color_skin)
    {
        #construtor por defecto
        /*$this->nombre = "Daniel";
        $this->edad = 25;
        $this->color_ojos = "cafe";
        $this->color_piel = "moreno";*/

        #constructor parametrizado
        $this->nombre = $name;
        $this->edad = $age;
        $this->color_ojos = $color_eyes;
        $this->color_piel = $color_skin;
    }

    public function estudiar(){
        echo "Las persona deben de estudiar por lo menos 1 hora";
    }

    public function verDatos(){

        echo "Datos de la persona: " . 
        "Nombre Completo: " . $this->nombre . 
        "Edad: " . $this->edad . 
        "Color de ojos: " . $this->color_ojos .
        "Color de piel: " . $this->color_piel;
    }

}

#instanciando la clase persona = creando objetos de la clase persona
$persona1 = new Persona("Maria",17,"negros","blanca");
print_r($persona1);
echo "<br>";


$persona2 = new Persona("Jose",20, "cafe", "morena");
$persona2->verDatos();
echo "<br>";
print_r($persona1);
echo "<br>";
print_r($persona2);


class Vendedor{

}
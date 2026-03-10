<?php

interface Personajes{
    public function recursos();
}


# objetos bases
class Iroman implements Personajes{

    public function recursos()
    {
        return "Iroman tiene cañones de luz";
    }
}

class Spiderman implements Personajes{

    public function recursos()
    {
        return "Spiderman tiene telarañas";
    }
}


abstract class PersonajesDecorator implements Personajes{
    private Personajes $personaje; 

    public function __construct(Personajes $ipersonaje)
    {
        $this->personaje = $ipersonaje;
    }

    public function recursos() {
        return $this->personaje->recursos();
    }

}

# decoradores hijos
class Bomba extends PersonajesDecorator{


    public function recursos() {
        return parent::recursos() . " y tiene bombas";
    }
}

class Puño extends PersonajesDecorator{


    public function recursos() {
        return parent::recursos() . " y tiene puño limpio";
    }
}

class RayoLacer extends PersonajesDecorator{


    public function recursos() {
        return parent::recursos() . " y tiene rayo lacer";
    }
}

echo "<h4>Objeto base de Iroman</h4>";
$personaje1 = new Iroman();
echo $personaje1->recursos();

echo "<h4>Decorando a Iroman</h4>";
$personaje1 = new RayoLacer($personaje1);
$personaje1 = new Bomba($personaje1);
echo $personaje1->recursos();


echo "<h4>Objeto base de Spiderman</h4>";
$personaje2 = new Spiderman();
echo $personaje2->recursos();


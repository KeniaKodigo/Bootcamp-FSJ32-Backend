<?php

interface IPersonaje{
    public function ataque();
    public function velocidad();
}

# clases concretas
class Esqueleto implements IPersonaje{

    public function ataque()
    {
        echo "El esqueleto ataca con huesos filados";
    }

    public function velocidad()
    {
        echo "El esqueleto tiene velocidad media";
    }
}

class Zombie implements IPersonaje{

    public function ataque()
    {
        echo "El zombie ataca con cuchillo y mordidas";
    }

    public function velocidad()
    {
        echo "El zombie es lento";
    }
}

class JuegoFactory{

    public static function crearPersonaje($nivel_juego) : IPersonaje{
        //condicion
        return match($nivel_juego){
            'facil' => new Esqueleto(),
            'dificil' => new Zombie(),
            default => throw new Exception("Solo existen 2 niveles de juego: facil y dificil")
        };
    }
}

$juego1 = JuegoFactory::crearPersonaje('facil');
$juego1->ataque();
echo "<br>";
$juego1->velocidad();

echo "<br>";
$juego2 = JuegoFactory::crearPersonaje('dificil');
$juego2->ataque();
echo "<br>";
$juego2->velocidad();
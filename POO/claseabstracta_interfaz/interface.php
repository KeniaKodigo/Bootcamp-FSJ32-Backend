<?php

interface ICRUD{
    public function agregar();
    public function editar();
    public function eliminar();
}

class Libro implements ICRUD{
    public $titulo;
    public $autor;

    public function agregar()
    {
        //code.. para agregar un libro
    }

    public function editar()
    {
        //code.. para editar un libro
    }

    public function eliminar()
    {
        //code.. para eliminar un libro
    }
}

class Autor implements ICRUD{
    public $nombre;
    public $bibliografia;

    public function agregar()
    {
        //code.. para agregar un autor
    }

    public function editar()
    {
        //code.. para editar un autor
    }

    public function eliminar()
    {
        //code.. para eliminar un autor
    }
}


class Usuario implements ICRUD{
    public $nombre;
    public $contacto;

    public function agregar()
    {
        //code.. para agregar un usuario
    }

    public function editar()
    {
        //code.. para editar un usuario
    }

    public function eliminar()
    {
        //code.. para eliminar un usuario
    }
}
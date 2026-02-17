<?php

#creando un intermediario (interfaz/clase abstracta)
interface Usuario{
    public function perfilUsuario();
}

class Estudiantes implements Usuario{
    public $nombre;
    public $carnet;

    public function __construct($nombre, $carnet)
    {
        $this->nombre = $nombre;
        $this->carnet = $carnet;
    }

    public function perfilUsuario()
    {
        return "Eres un estudiante";
    }
}

class ProfesoresInvitado implements Usuario{
    public $nombre;
    public $correo;

    public function __construct($nombre, $correo)
    {
        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    public function perfilUsuario()
    {
        return "Eres un profesor invitado";
    }
}

class GestorInscripciones {
    private Usuario $usuario;

    public function __construct(Usuario $usuario) { //Estudiantes, ProfesoresInvitados
        $this->usuario = $usuario;
    }
}

$estudiante = new Estudiantes("Kenia","KP2024");
$profesor_jose = new ProfesoresInvitado("Jose","jose@gmail.com");

$inscripcion = new GestorInscripciones($estudiante);
$inscripcion2 = new GestorInscripciones($profesor_jose);
print_r($inscripcion2);
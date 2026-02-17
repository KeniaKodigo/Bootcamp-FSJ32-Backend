<?php

class Estudiante{
    public $nombre;
    public $carnet;

    public function __construct($nombre, $carnet)
    {
        $this->nombre = $nombre;
        $this->carnet = $carnet;
    }
}

class ProfesorInvitado{
    public $nombre;
    public $correo;

    public function __construct($nombre, $correo)
    {
        $this->nombre = $nombre;
        $this->correo = $correo;
    }
}

class GestorInscripcion {
    private Estudiante $estudiante;

    public function __construct(Estudiante $estudiante) {
        $this->estudiante = $estudiante;
    }
}

$estudiante = new Estudiante("Kenia","KP2024");
$profesor_jose = new ProfesorInvitado("Jose","jose@gmail.com");

$inscripcion = new GestorInscripcion($estudiante);
// $inscripcion2 = new GestorInscripcion($profesor_jose);
print_r($inscripcion);

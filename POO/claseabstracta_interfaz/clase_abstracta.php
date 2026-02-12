<?php

abstract class Bootcamps{
    protected string $titulo;
    protected int $duracion; //que el numero hace referencia a semanas
    protected string $temario;
    protected string $coach; 
    protected array $estudiantes = [];
    private bool $esGratuito;

    //constructor por defecto / constructor parametrizado
    public function __construct($title, $duracion, $temario, $esGratuito)
    {
        $this->titulo = $title;
        $this->duracion = $duracion;
        $this->temario = $temario;
        $this->esGratuito = $esGratuito;
    }

    public function agregarEstudiantes(){
        //code..
    }

    public function mostrarDetalle(){
        //informacion del bootcamp
        echo "Bootcamp: {$this->titulo}<br>";
        echo "Duracion: {$this->duracion} semanas<br>";
        echo "Temario: {$this->temario}<br>";
        echo $this->getEsGratuito() ? "Tipo Bootcamp: Bootcamp Gratuito<br>" : "Tipo Bootcamp: Bootcamp de Paga<br>";
    }
    
    //metodo get y set (atributos privados)
    public function getEsGratuito(){
        return $this->esGratuito; //conseguimos el valor del atributo privado
    }

    //sirve para editar/actualizar el dato de un atributo privado
    public function setEsGratuito($nuevo_valor){
        $this->esGratuito = $nuevo_valor;
    }

    # el metodo abstracto solo se declara, no lleva comportamiento
    public abstract function agregarTemario();
}


#una clase abstracta su funcion es compartir y reutilizar sus atirbutos y metodos a las clases hijas
class BootcampJava extends Bootcamps{

    public function agregarTemario()
    {
        echo "Temario de Java";
    }
}

class BootcampData extends Bootcamps{

    public function agregarTemario()
    {
        echo "Temario de Data";
    }
}   
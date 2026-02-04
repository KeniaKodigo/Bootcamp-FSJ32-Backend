<?php

class Bootcamp{
    protected string $titulo;
    protected int $duracion; //que el numero hace referencia a semanas
    protected string $temario;
    protected string $coach; 
    protected array $estudiantes = [];
    private bool $esGratuito;

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

        /*if($this->getEsGratuito()){
            echo "Tipo Bootcamp: Bootcamp Gratuito<br>";
        }else{
            echo "Tipo Bootcamp: Bootcamp de Paga<br>";
        }*/
    }
    
    //metodo get y set (atributos privados)
    public function getEsGratuito(){
        return $this->esGratuito; //conseguimos el valor del atributo privado
    }

    //sirve para editar/actualizar el dato de un atributo privado
    public function setEsGratuito($nuevo_valor){
        $this->esGratuito = $nuevo_valor;
    }

}

$bootcamp1 = new Bootcamp("Java Developer",12,"Aprende Java y base de datos",false);
//echo $bootcamp1->titulo;
echo "<br>";
//actualizando que el bootcamp ahora es gratuito
$bootcamp1->setEsGratuito(true);
$bootcamp1->mostrarDetalle();


//creando otra clase (y aplicando herencia)
class BootcampFullStackJr extends Bootcamp{

    #cambiando el comportamiento del metodo de la clase padre
    public function mostrarDetalle()
    {
        echo "📗 <b>Bootcamp FullStack:</b> {$this->titulo}<br>";
        echo "📅 <b>Duracion:</b> {$this->duracion} semanas<br>";
        echo "📝 <b>Temario:</b> {$this->temario}<br>";
        echo $this->getEsGratuito() ? "🎯 <b>Tipo Bootcamp:</b> 😀 Bootcamp Gratuito<br>" : "🎯 <b>Tipo Bootcamp:</b> 💰 Bootcamp de Paga<br>";
    }

    public function entregarCertificadoWeb(){
        echo "Felicidades al estudiante por la certificacion";
    }
}

$bootcamp2 = new BootcampFullStackJr("Full stack jr 32", 24, "Aprende las ramas frontend y backend del desarrollo web",false);
echo "<br>";
$bootcamp2->mostrarDetalle();
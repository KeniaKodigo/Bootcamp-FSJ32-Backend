<?php

/**
 * abstraccion: extraer lo mas relevante para tus clases
 * 
 * herencia: la forma en como una clase comparto sus atributos y metodos a otra clase (el objetivo es reutilizar codigo de otras clases)
 * 
 * polimorfismo: cuando un mismo metodo puede tener varios comportamientos
 * 
 * encapsulamiento: la forma en como restringimos el acceso a los atributos/metodos de una clase
 * existen 3 tipos de modificadores: 
 *  public: dentro de la clase, fuera de la clase y clases heredades, 
 *  protected: dentro de la clase y clases heredades (herencia), 
 *  private: dentro de la clase (tributo/set -> actualiza el valor del atributo)get -> devolver el valor del a
 */

class Bootcamp{
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

    /** constructor por defecto
     * public function __construct()
    * {
     *       $this->titulo = "FullStack JR";
      *      $this->duracion = 6;
      *      $this->temario = "Desarrollo WEB";
      *      $this->esGratuito = false;
      *  }
    */
    

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

$objeto_bootcamp = new Bootcamp("aa",2,"sss",true);
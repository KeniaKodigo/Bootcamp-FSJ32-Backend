<?php

/**
 * include / include_once  (utilizarlo mas que todo para las vistas)
 * requiere / require_once (se utiliza para la logica (codigo PHP))
 */

require_once "./bootcamp.php";

//creando otra clase (y aplicando herencia)
class BootcampFullStackJr extends Bootcamp{
    public string $programacion;

    #cambiando el comportamiento del metodo de la clase padre

    #sobreescritura de metodos (poliformismo)
    public function mostrarDetalle()
    {
        echo "📗 <b>Bootcamp FullStack:</b> {$this->titulo}<br>";
        echo "📅 <b>Duracion:</b> {$this->duracion} semanas<br>";
        echo "📝 <b>Temario:</b> {$this->temario}<br>";
        echo $this->getEsGratuito() ? "🎯 <b>Tipo Bootcamp:</b> 😀 Bootcamp Gratuito<br>" : "🎯 <b>Tipo Bootcamp:</b> 💰 Bootcamp de Paga<br>";
    }

    /* ejemplo de sobrecarga de metodos (agregas un parametro de mas)
    public function mostrarDetalle($tipo){
        echo "DETALLES DEL BOOTCAMP";
        echo $tipo;
    }*/

    public function entregarCertificadoWeb(){
        echo "Felicidades al estudiante por la certificacion";
    }
}

//instancias de las clases

$bootcamp1 = new Bootcamp("Java Developer",12,"Aprende Java y base de datos",false);
//echo $bootcamp1->titulo;
echo "<br>";
//actualizando que el bootcamp ahora es gratuito
$bootcamp1->setEsGratuito(true);
$bootcamp1->mostrarDetalle();


$bootcamp2 = new BootcampFullStackJr("Full stack jr 32", 24, "Aprende las ramas frontend y backend del desarrollo web",false);
echo "<br>";
$bootcamp2->mostrarDetalle();
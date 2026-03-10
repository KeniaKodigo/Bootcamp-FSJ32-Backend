<?php

interface FormatosStrategy{
    public function salida($mensaje);
}

# agregamos las estrategias a procesar
class ConsolaStrategy implements FormatosStrategy{

    public function salida($mensaje)
    {
        return "Formato de salida por consola: " . $mensaje;
    }
}

class JSONStrategy implements FormatosStrategy{

    public function salida($mensaje)
    {
        return "Formato de salida por JSON: " . $mensaje;
    }
}

class TXTStrategy implements FormatosStrategy{

    public function salida($mensaje)
    {
        return "Formato de salida por texto plano: " . $mensaje;
    }
}

class ProcesarSalidaTexto{
    private FormatosStrategy $estrategia;

    # metodo que escoge la estrategia a procesar
    public function setSalida(FormatosStrategy $formato){
        $this->estrategia = $formato;
    }

    public function procesarMensaje($mensaje){
        return $this->estrategia->salida($mensaje);
    }
}

$salida1 = new ProcesarSalidaTexto();
$salida1->setSalida(new ConsolaStrategy);
echo $salida1->procesarMensaje("Practicando Patrones de Comportamiento");

echo "<br>";
$salida2 = new ProcesarSalidaTexto();
$salida2->setSalida(new TXTStrategy);
echo $salida2->procesarMensaje("Hola! :)");

echo "<br>";
$salida3 = new ProcesarSalidaTexto();
$salida3->setSalida(new JSONStrategy);
echo $salida3->procesarMensaje("Ya estamos a punto de ver bd!");
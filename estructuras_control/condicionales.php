<?php
# ESTRUCTURAS CONDICIONALES
#if-else (sirve para evaluar UNA condicion)
function votar($edad){

    if($edad >= 18){
        return "Ya sos mayor de edad, puedes votar";
    }else{
        return "Eres menos de edad, por lo tanto no puedes votar";
    }
}

echo votar(19);
echo "<br>";
echo votar(11);


// funcion para saber si el numero termina en 4
function verificarNumero($numero){
    //MOD = %
    if($numero % 10 == 4){
        return "El numero termina en 4";
    }else{
        return "El numero NO termina en 4";
    }
}
echo "<br>";
echo verificarNumero(123);
echo "<br>";

#if-else if-else (para evaluar VARIAS condiciones)
function evaluarNota($nota){
    /**
     * 7.5 en adelante = aprobo
     * 6 a 7.4 = recuperacion
     * menos de 6 = reprobo
     */

    if($nota >= 7.5){
        return "Aprobo";
    }else if($nota >= 6 && $nota <= 7.4){
        return "En recuperacion";
    }else{
        return "Reprobo";
    }
}

echo "El estado del estudiante es: " . evaluarNota(6.7);
echo "<br>";
echo "El estado del estudiante es: " . evaluarNota(7.6);
echo "<br>";
echo "El estado del estudiante es: " . evaluarNota(3);

#switch (evalua varias condiciones/casos)
function verificarPago($medio_pago){
    $mensaje = "";

    switch($medio_pago){
        case "Efectivo":
            $mensaje = "El usuario va pagar en efectivo";
            break; //va parar el proceso si se cumple el caso
        case "Tarjeta":
            $mensaje = "El usuario va pagar por tarjeta de credito";
            break;
        case "Bitcoin":
            $mensaje = "El usuario va pagar por bitcoin";
            break;

        default:
            $mensaje = "No selecciono una forma de pago";
    }

    return "Detalle del pago: " . $mensaje;
}
echo "<br>";
echo verificarPago("Bitcoin");
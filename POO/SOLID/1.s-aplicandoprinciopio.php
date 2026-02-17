<?php

#separamos las responsabilidades en 2 clases
class Students{
    public string $name;
    public string $email;
    public string $carnet;

    public function all(){
        //code..
    }

}


class PaymentManager{

    public function registerPayment(Students $student, $amount){
        //code..
    }

    public function all(){

    }
}

$pepe = new Students();
$daniel = new Students();

$pago1 = new PaymentManager();
$pago1->registerPayment($daniel, 25);
<?php

# APLICANDO EL PATRON DECORATOR

# interfaz que tendra relacion con los objetos base y decorador padre
interface ICoffee{
    public function cost();
    public function description();
}

# objeto concreto
class CoffeeSimple implements ICoffee{
    public function cost() {
        return 5;
    }

    public function description() {
        return "Café simple";
    }
}



# creamos el decorador base
abstract class CoffeeDecorator implements ICoffee{
    private ICoffee $coffee; 

    public function __construct(ICoffee $icoffee)
    {
        $this->coffee = $icoffee;
    }

    public function cost() {
        return $this->coffee->cost();
    }

    public function description() {
        return $this->coffee->description();
    }
}

# hijas (decoradores)
class MilkDecorator extends CoffeeDecorator{

    public function cost() {
        return parent::cost() + 1;
    }

    public function description() {
        return parent::description() . " con leche";
    }
}

class CarameloDecorator extends CoffeeDecorator{

    public function cost() {
        return parent::cost() + 1.75;
    }

    public function description() {
        return parent::description() . " con caramelo";
    }
}


class ChocolateDecorator extends CoffeeDecorator{

    public function cost() {
        return parent::cost() + 2.10;
    }

    public function description() {
        return parent::description() . " con chocolate";
    }
}

# creando el objeto
$coffee = new CoffeeSimple();
echo $coffee->description() . " cuesta $" . $coffee->cost();

echo "<br><br>";

# decorar
$coffee = new MilkDecorator($coffee);
$coffee = new CarameloDecorator($coffee);
echo $coffee->description() . " cuesta $" . $coffee->cost();

echo "<br><br>";
$coffee2 = new CoffeeSimple();
echo $coffee2->description() . " cuesta $" . $coffee2->cost();
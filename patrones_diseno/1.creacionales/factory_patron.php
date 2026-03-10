<?php

# APLICANDO EL PATRON FACTORY


# 1. creamos una interfaz para las clases concretas (productos) es decir los objetos que se van a crear a partir de dichas clases
interface INotification{
    public function send($message);
}

# 2. creamos las clases concretas
class EmailNotification implements INotification{
    public string $email;
    public string $usuario;
    public string $nombre;

    public function send($message){
        echo "Notificacion por via email: " . $message;
    }

}

class SMSNotification implements INotification{
    public int $telefono;

    public function send($message){
        echo "Notificacion por via SMS: " . $message;
    }
}


class PushNotification implements INotification{
    
    public function send($message){
        echo "Notificacion por via push: " . $message;
    }
}

class FacebookNotification implements INotification{
    public function send($message){
        echo "Notificacion por via facebook: " . $message;
    }
}

# 3. Creando la clase fabrica
class NotificationFactory{
    //atributos, metodos

    //metodo que se va encargar de crear los objetos 
    public static function createNotification(string $type) : INotification{
        return match($type){
            'email' => new EmailNotification(),
            'SMS' => new SMSNotification(),
            'push' => new PushNotification(),
            'facebook' => new FacebookNotification(),
            default => throw new Exception("Tipo de notificacion no soportado")
        };
    }   
}

#demo de envio de notificaciones
$noti1 = NotificationFactory::createNotification("SMS");
$noti1->send("Hola estamos aplicando factory :)");
echo "<br>";
$noti2 = NotificationFactory::createNotification("email");
$noti2->send("Hello how are you?");
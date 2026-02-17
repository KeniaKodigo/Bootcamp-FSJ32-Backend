<?php

#primera solucion (aplicando una interfaz)
interface LevelCourse{
    public function getDuration();
}

class CourseBasic implements LevelCourse{

    public function getDuration()
    {
        return 30;
    }
}

class CourseIntermediate implements LevelCourse{

    public function getDuration()
    {
        return 45;
    }
}

class CourseAdvanced implements LevelCourse{

    public function getDuration()
    {
        return 60;
    }
}

class AdvancedCallCenter implements LevelCourse{

    public function getDuration()
    {
        return 20;
    }
}




#segunda solucion (utilizando clase abstracta)
abstract class Courses{
    public $title;
    public $temario;

    public function detalleTemario(){
        //mostrar el contenido de los cursos
    }

    //metodo abstracto
    public abstract function getDuration();
}

class CourBasic extends Courses{

    public function getDuration()
    {
        return 30;
    }
}

class CourAdvanced extends Courses{

    public function getDuration()
    {
        return 60;
    }
}


<?php

interface AcademicEstudent {
    public function registerStudent();
}

interface AcademicTeacher{
    public function assignProfessor();
}

interface PaymentManagement{
    public function registerPayment();
}

# simulando la herencia multiple (una clase puede implementa mas de una interfaz)
class Courses implements AcademicEstudent, AcademicTeacher{

    public function registerStudent()
    {
        //code..
    }

    public function assignProfessor()
    {
        //code..
    }
}   

class Admin implements PaymentManagement{
    public function registerPayment()
    {
        //code..
    }
}


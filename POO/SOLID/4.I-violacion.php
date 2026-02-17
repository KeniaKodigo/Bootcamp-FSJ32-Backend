<?php

interface AcademicManagement {
    public function registerStudent();
    public function assignProfessor();
    public function registerPayment();
}

class Course implements AcademicManagement {
    public function registerStudent() {
        // Código para inscribir estudiante
    }

    public function assignProfessor() {
        // Código para asignar profesor
    }

    public function registerPayment() {
        // Curso no debería encargarse de pagos
        throw new Exception("el registro de pago no se hace en el curso");
    }
}
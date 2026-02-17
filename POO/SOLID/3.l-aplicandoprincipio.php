<?php

interface AssignableSchedule{
    public function assignTime($schedule);
}

class Teacher implements AssignableSchedule{
    public function assignTime($schedule) {
        // code..
    }
}

class Director implements AssignableSchedule{
    public function assignTime($schedule) {
        // code..
    }
}

class GuestTeacher{
    //otra cosa

    public function horarioDisponible(){
        //code..
    }
}
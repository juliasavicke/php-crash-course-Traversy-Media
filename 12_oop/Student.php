<?php
require_once "Person.php";
class Student extends Person
{
    public $studentId;
    public function __construct($name, $surname, $studentId)
    {
        parent::__construct($name, $surname);
        $this->age = 18;
        $this->studentId = $studentId;
    }
}

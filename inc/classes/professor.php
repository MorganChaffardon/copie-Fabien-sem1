<?php

class Professor extends CoreModel
{
    private $firstName;
    private $lastName;

    public function __construct($id, $firstName, $lastName) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getProfName() {
        return $this->firstName . ' ' . substr($this->lastName, 0, 1) . '.';
    }
}
<?php

// On crée une classe
// convention nom en PascalCase
class Person
{
    // on déclare des propriétés (= variable à l'intérieur d'une classe)
    public $name;
    public $age = 42; // 42 est la valeur par défaut

    // on déclare des méthodes (= fonction à l'intérieur d'une classe)
    public function sayHello($who)
    {
        return 'Bonjour ' . $who;
    }
}

// on instancie un objet à partir de notre classe
$user = new Person();
var_dump($user->age);
var_dump($user->sayHello('Pauline'));
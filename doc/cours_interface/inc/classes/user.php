<?php

// implements → va suivre l'interface Person

class User implements Person
{
    protected $name;
    public $age = 42;

    public function sayHello()
    {
        return 'Bonjour, je suis ' . $this->name;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * User doit OBLIGATOIREMENT implémenter happyBirthday
     * car il `implements` l'interface Person
     */
    public function happyBirthday()
    {
        echo 'Bon anniversaire ! 🎂🍻';
    }
}
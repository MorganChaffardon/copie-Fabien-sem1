<?php

final class ChuckNorris extends Admin
{
    /*
      Ici on peut ré-écrire une propriété MAIS ATTENTION
      elle doit garder la même **signature**

      SIGNATURE :
      visibility $property
    */
    // protected $name = 'Chuck Norris';

    public function __construct()
    {
      $this->name = 'Chuck Norris';
    }

    /*
      Ici on peut ré-écrire une méthode MAIS ATTENTION
      elle doit garder la même **signature**

      SIGNATURE :
      visibility function funcName([params])[: returnType] {}

      Note :
        - visibility : public | private | protected
        - `: returnType` (_type hint_) si déclaré est obligatoire
    */
    /**
    * Set the value of name
    *
    * @return  self
    */
    // public function setName($name): self
    // {
    //     return $this;
    // }


    public function connect()
    {
        return "C'est la BDD qui se connecte à Chuck Norris";
    }

    public function happyBirthday()
    {
        echo "C'est à toi de me souhaiter un bon anniversaire";
    }
}
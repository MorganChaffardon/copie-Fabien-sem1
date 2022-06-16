<?php
/*
 L'héritage (concept fondamental en POO) est le fait de
 baser la définition d'une classe (enfant) sur une autre (parent),
 pour en récupérer les membres (propriétés et méthodes).
*/

// Classe « parent »
class User
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
}

// classe « enfant » qui hérite (**extends**) de la classe User
class Admin extends User
{
    public $password;

    public function connect()
    {
        return $this->password === '1234' ? 'connected' : 'error';
    }
}

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
}

/*
Fatal error: Class God may not inherit from final class (ChuckNorris)
*/
// class God extends ChuckNorris
// {

// }

$user = new User();
$user->setName('John Dœuf');
var_dump($user, $user->sayHello());

$admin = new Admin();
$admin->setName('Dave Lopper');
$admin->password = '1234';
var_dump($admin, $admin->sayHello(), $admin->connect());

$chuck = new ChuckNorris();
// $chuck->name = 'Steven Seagal';
var_dump($chuck, $chuck->sayHello(), $chuck->connect());

// $god = new God();
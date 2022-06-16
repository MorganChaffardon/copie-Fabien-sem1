<?php
/*
 L'héritage (concept fondamental en POO) est le fait de
 baser la définition d'une classe (enfant) sur une autre (parent),
 pour en récupérer les membres (propriétés et méthodes).
*/

// Classe « parent »
class User
{
    public $name;
    public $age = 42;

    public function sayHello()
    {
        return 'Bonjour, je suis ' . $this->name;
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
    public $name = 'Chuck Norris';

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
$user->name = 'John Dœuf';
var_dump($user, $user->sayHello());

$admin = new Admin();
$admin->name = 'Dave Lopper';
$admin->password = '1234';
var_dump($admin, $admin->sayHello(), $admin->connect());

$chuck = new ChuckNorris();
var_dump($chuck, $chuck->sayHello(), $chuck->connect());

// $god = new God();
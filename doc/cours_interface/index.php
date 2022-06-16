<?php

require 'inc/interfaces/person.php';
require 'inc/classes/user.php';
require 'inc/classes/admin.php';
require 'inc/classes/chuckNorris.php';

$user = new User();

$admin = new Admin();

$chuck = new ChuckNorris();

// le jour de mon anniversaire, on pourra faire :
foreach ([$admin, $chuck] as $myBirthdayGuest) {
    $myBirthdayGuest->happyBirthday();
}
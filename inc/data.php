<?php

// import des interfaces
require 'interfaces/model.php';

// import des classes
require 'classes/coreModel.php';
require 'classes/course.php';
require 'classes/professor.php';

// Fatal error: Uncaught Error: Cannot instantiate abstract class CoreModel
// $core = new CoreModel();
// var_dump($core);die();

// Liste des professeurs
$professors = [
    new Professor(1, 'Nicolas', 'Ramel'),
    new Professor(2, 'Pierre', 'Castin'),
    new Professor(3, 'Alexandre', 'Bareau')
];

/* instanciation de la classe Course pour obtenir un nouvel objet
    qui sera stocké dans la variable $coursPhp */
$coursPhp = new Course(1);
// Nos setters retournent tous `$this` donc l'objet lui-même. (OPTIONNEL)
// on peut alors « chainer » les méthodes
$coursPhp
    ->setTitle('Les bases de PHP')
    ->setImage('cours-php.jpg')
    ->setShortDescription('Adapté aux débutants')
    ->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempus lacus sit amet diam rhoncus, at congue magna maximus. Pellentesque ultrices vitae magna ut laoreet. Nunc ac sem faucibus, placerat justo sit amet, posuere quam.

Suspendisse potenti. Ut sapien turpis, suscipit tristique enim sit amet, eleifend bibendum leo. Maecenas in quam sed nibh feugiat tristique a et lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.')
    ->setProgramContent([
        'Les variables',
        'Les conditions',
        'Les boucles',
        'Les tableaux',
        'Les classes',
        'Interaction avec une base de données'
    ])
    ->setNumberOfHours(70)
    ->setPrice(790)
    ->setClassDate('14/03/2022 au 18/03/2022')
    ->setProfessor('Nicolas R.')
    ->setModality('A distance')
    ->setRequiredLevel('Débutant');

/* instanciation de la classe Course pour obtenir un nouvel objet
    qui sera stocké dans la variable $coursGDP */
$coursGDP = new Course(2);
$coursGDP->setTitle('Gestion de projet');
$coursGDP->setImage('cours-gdp.jpg');
$coursGDP->setShortDescription('Piloter des projets au quotidien');
$coursGDP->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempus lacus sit amet diam rhoncus, at congue magna maximus. Pellentesque ultrices vitae magna ut laoreet. Nunc ac sem faucibus, placerat justo sit amet, posuere quam.

Suspendisse potenti. Ut sapien turpis, suscipit tristique enim sit amet, eleifend bibendum leo. Maecenas in quam sed nibh feugiat tristique a et lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.');
$coursGDP->setProgramContent([
    'Cahier des charges',
    'Les méthodes des gestions de projets',
    'Les intervenants',
    'La communication'
]);
$coursGDP->setNumberOfHours(35);
$coursGDP->setPrice(490);
$coursGDP->setClassDate('sept 2022');
$coursGDP->setProfessor('Nicolas R.');
$coursGDP->setModality('A distance');
$coursGDP->setRequiredLevel('Intermédiaire');

/* instanciation de la classe Course pour obtenir un nouvel objet
    qui sera stocké dans la variable $coursSEO */
$coursSEO = new Course(
    3,
    'SEO',
    'cours-seo.jpg',
    'Lorem ipsum dolor sit amet.',
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempus lacus sit amet diam rhoncus, at congue magna maximus. Pellentesque ultrices vitae magna ut laoreet. Nunc ac sem faucibus, placerat justo sit amet, posuere quam.
    Suspendisse potenti. Ut sapien turpis, suscipit tristique enim sit amet, eleifend bibendum leo. Maecenas in quam sed nibh feugiat tristique a et lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
    [],
    35,
    490,
    'juin 2023',
    'Pierre C.',
    'Présentiel',
    'Débutant'
);
$coursSEO->addToProgramContent('Référencement naturel vs. référencement payant');
$coursSEO->addToProgramContent('Principe de base');
$coursSEO->addToProgramContent('Optimisation de sa page');
$coursSEO
    ->addToProgramContent('Backlink')
    ->addToProgramContent('Return $this permet de chainer');

/* instanciation de la classe Course pour obtenir un nouvel objet
    qui sera stocké dans la variable $coursCM */
$coursCM = new Course(
    4,
    'Community manager',
    'cours-community-manager.jpg',
    'Lorem ipsum dolor sit amet.',
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempus lacus sit amet diam rhoncus, at congue magna maximus. Pellentesque ultrices vitae magna ut laoreet. Nunc ac sem faucibus, placerat justo sit amet, posuere quam.
    Suspendisse potenti. Ut sapien turpis, suscipit tristique enim sit amet, eleifend bibendum leo. Maecenas in quam sed nibh feugiat tristique a et lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
    [],
    60,
    800,
    'dec. 2022',
    'Pierre C.',
    'Présentiel',
    'Débutant'
);

/* instanciation de la classe Course pour obtenir un nouvel objet
    qui sera stocké dans la variable $coursAdminSys */
$coursAdminSys = new Course(
    5,
    'Administrateur système',
    'cours-admin-systeme.jpg',
    'Lorem ipsum dolor sit amet.',
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempus lacus sit amet diam rhoncus, at congue magna maximus. Pellentesque ultrices vitae magna ut laoreet. Nunc ac sem faucibus, placerat justo sit amet, posuere quam.
    Suspendisse potenti. Ut sapien turpis, suscipit tristique enim sit amet, eleifend bibendum leo. Maecenas in quam sed nibh feugiat tristique a et lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
    [],
    120,
    2900,
    'nov. 2022',
    'Nicolas R.',
    'A distance et présentiel',
    'Intermédiaire'
);

// liste des cours
$courses = [
    $coursPhp,
    $coursGDP,
    $coursSEO,
    $coursCM,
    $coursAdminSys
];

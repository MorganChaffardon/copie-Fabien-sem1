<?php

/*
  C'est un ensemble de signatures de méthodes sans implémentation.
  Les classes liées à cette interface devront obligatoirement implémenter ces méthodes.
  C'est une sorte de « contrat » que les classes doivent respectées.

  1. Les interfaces en programmation objet vous permettent de créer du code
  qui spécifie quelles méthodes doivent être implémentées dans une classe,
  sans avoir à définir comment ces méthodes fonctionneront.

  2. [sources](https://apprentissage-langage.herokuapp.com/?lesson=10-interface&language_src=js&language_target=php)

  3. dans l'interface on stocke/declare la signature de la methode
  4. mais on ne definit pas le code
  5. c'est une sorte de contrat à respecter lorsqu'on declare une nouvelle classe
  à partir de l'interface

  Analogie…
  Une interface est comparable à une prise USB :
  elle définit un standard de « connexion » sans savoir quels types d'appareils
  vont venir s'y connecter (analogie reprise est modifiée de developpez.com)
  src : https://alain-sahli.developpez.com/tutoriels/php/les-interfaces/
*/

interface Person
{
    public function happyBirthday();
}
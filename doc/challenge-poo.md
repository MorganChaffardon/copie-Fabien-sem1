# Challenge POO

On aime la programmation orientée objet alors c'est parti pour finaliser notre projet.

## Finalisation de tous les getters et setters

On a fait un getter et setter ensemble, il faudrait le faire pour toutes les propriétés de notre classe `Course`. Pour l'instant, tu dois modifier uniquement le fichier `inc/classes/cours.php`

## La visibilité

Tu vas expérimenter le changement suivant dans le fichier `inc/classes/cours.php`, tu as remarqué le mot clé `public` devant la définition des propriétés ? Remplace ce mot clé `public` par `private`. Aïe, Aïe, Aïe, :rage: on a des erreurs de partout.

Il ne reste plus qu'à comprendre pourquoi ça ne fonctionne plus et debugguer. 

Prends les choses dans l'ordre :

- tu peux faire l'appel à un ami pour qu'il te rappelle la différence entre `public` et `private`
- avance pas à pas, on ne debuggue pas tous les fichiers en même temps
- on traite d'abord les erreurs qui sont affichées dans notre navigateur
- la solution n'est pas de remettre le mot clé `public`, ça serait trop facile :stuck_out_tongue:

## Les méthodes

On va sécuriser les données de notre objet. Pour cela, tu vas modifier les setters pour verifier les données qui sont injectées dans notre objet. Par exemple, le nombre d'heures. Tu peux analyser les différentes propriétés pour sécuriser au maximum.

Tu as remarqué que le programme est stocké dans un tableau. Peux-tu créer une méthode `addToProgramContent` qui va ajouter des éléments dans la propriété : `$programContent` ?

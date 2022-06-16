<?php

function getCourseOrRedirect($id, $courses)
{
    // $course = $courses[$id] ?? null;
    /*
      `??` est l'opérateur **Null coalescent**
      ([documentation](https://www.php.net/manual/fr/migration70.new-features.php#migration70.new-features.null-coalesce-op))
      équivalent à, en ternaire :
      $id = isset($_GET['id']) ? $_GET['id'] : null;
      et à :
      if (isset($_GET['id'])) {
          $id = $_GET['id'];
      }
      else {
          $id = null;
      }
    */
    foreach ($courses as $course) {
        // Attention $id (issu du $_GET est un string), on le « transforme » en entier (int)
        // pour la comparaison voir https://www.php.net/manual/en/language.operators.comparison.php
        if ($course->getId() === intval($id)) {
            return $course;
        }
    }

    // if (!$course) { // '42' == 42 → true ; '42' === 42 → false
        header('Location: 404.php');
        exit();
    // }

    // return $course;
}
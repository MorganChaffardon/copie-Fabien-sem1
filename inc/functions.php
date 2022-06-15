<?php

function getCourseOrRedirect($id, $courses)
{
    $course = $courses[$id] ?? null;
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

    if (!$course) { // '42' == 42 → true ; '42' === 42 → false
        header('Location: 404.php');
        exit();
    }

    return $course;
}
<?php
// inclusion du fichier avec les données
include('inc/data.php');

// inclusion du fichier qui contiendra nos fonctions
include('inc/functions.php');

// récupération de l'id du cours
// $_GET est un tableau associatif qui est automatiquement créer par PHP
// Ce tableau contient les valeurs des paramètres transmis dans l'url (query string)
$id = $_GET['id'] ?? null;

/*
    `??` est l'opérateur **Null coalescent**
    ([documentation](https://www.php.net/manual/fr/migration70.new-features.php#migration70.new-features.null-coalesce-op))

    équivalent à, en ternaire :
    $id = isset($_GET['id']) ? $_GET['id'] : null;

    et à :
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    } else {
        $id = null;
    }
*/

// recherche le cours par son id
$course = getCourseOrRedirect($id, $courses);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O'programme</title>
    <!-- Insertion du fichier CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <?php include('inc/nav.php'); ?>

    <div class="container mb-5">
        <div class="row">
            <div class="col">
                <h1><?= $course->getTitle(); ?></h1>
            </div>
            <div class="col text-end">
                <span class="badge bg-success"><?= $course->getNumberOfHours(); ?>h</span>
                <span class="badge bg-warning"><?= $course->getPrice(); ?> €</span>
            </div>
        </div>

        <div class="row">
            <div class="col"><img src="images/<?= $course->getImage(); ?>" class="card-img-top" alt="cours PHP"></div>
            <div class="col">
                <?= nl2br($course->getDescription()); ?>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h2>Le programme</h2>

                <?php if (!empty($course->getProgramContent())): ?>
                    <ul>
                        <?php foreach ($course->getProgramContent() as $notion) : ?>
                            <li><?= $notion; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php else: ?>
                    <p>
                        Programme non défini.
                    </p>
                <?php endif; ?>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h2>Caractéristiques</h2>

                <table class="table table-striped">
                    <tr>
                        <td>Dates</td>
                        <td><?= $course->getClassDate(); ?></td>
                    </tr>
                    <tr>
                        <td>Votre prof</td>
                        <td><?= $course->getProfessor(); ?></td>
                    </tr>
                    <tr>
                        <td>Durée</td>
                        <td><?= $course->getNumberOfHours(); ?>h</td>
                    </tr>
                    <tr>
                        <td>Modalité</td>
                        <td><?= $course->getModality(); ?></td>
                    </tr>
                    <tr>
                        <td>Niveau requis</td>
                        <td><?= $course->getRequiredLevel(); ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

<!-- Insertion du fichier JS de Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>
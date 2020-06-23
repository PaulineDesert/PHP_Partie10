<?php

$portrait1 = array('name' => 'Victor', 'firstname' => 'Hugo', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
$portrait2 = array('name' => 'Jean', 'firstname' => 'de La Fontaine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
$portrait3 = array('name' => 'Pierre', 'firstname' => 'Corneille', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
$portrait4 = array('name' => 'Jean', 'firstname' => 'Racine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');
$portrait = [$portrait1, $portrait2, $portrait3, $portrait4];

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
    <title>TP3</title>
</head>

<body>

    <div class="row">

        <?php foreach ($portrait as $index => $array) { ?>

            <div class="col-sm-2 m-5">
                <div class="card">
                    <img src="<?= $array['portrait'] ?>" class="card-img-top" alt="<?= 'Photo ' . $array['name'] . chr(10) . $array['firstname'] ?>">
                    <div class="card-body">
                        <p class="card-text text-center"><?= $array['name'] . chr(10) . $array['firstname'] ?></p>
                    </div>
                </div>
            </div>

        <?php } ?>

    </div>

</body>

</html>
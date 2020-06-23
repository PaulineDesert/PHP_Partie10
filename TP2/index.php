<?php

require_once 'controller.php';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <title>TP 2</title>
</head>

<body>

    <div class="row">
        <h1>Formulaire</h1>
        <form action="" method="post" class="col s8  offset-s2 grey lighten-5">
            <div class="row">
                <div class="input-field col s12">
                    <select name="civility" id="civility" required>
                        <option value="" disabled selected class="grey-text <?= isset($_POST['civility']) && !$checkCivility ? 'invalid' : 'validate' ?>">-</option>
                        <option value="Mr" <?= isset($_POST['civility']) && $_POST['civility'] ==  'Mr' ? 'selected' : '' ?>>Mr</option>
                        <option value="Mme" <?= isset($_POST['civility']) && $_POST['civility'] ==  'Mme' ? 'selected' : '' ?>>Mme</option>
                    </select>
                    <label>Civilité<span class="red-text text-accent-4">*</span></label>
                    <span class="helper-text" data-error="<?= !$checkCivility ? 'Veuillez renseigner ce champ' : '' ?>"></span>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input value="<?= $checkLastName ? htmlspecialchars($_POST['lastName']) : '' ?>" id="lastName" type="text" name="lastName" aria-describedby="lastName" pattern="^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ-]{2,20}$" class="<?= isset($_POST['lastName']) && !$checkLastName ? 'invalid' : 'validate' ?>" required>
                    <label for="lastName">Nom<span class="red-text text-accent-4">*</span></label>
                    <span class="helper-text" data-error="<?= isset($_POST['lastName']) && !$checkLastName ? 'Veuillez renseigner ce champ. Ex: Dupont' : '' ?>"></span>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input value="<?= $checkFirstName ? htmlspecialchars($_POST['firstName']) : '' ?>" id="firstName" pattern="^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ-]{2,20}$" type="text" name="firstName" aria-describedby="firstName" class="<?= isset($_POST['firstName']) && !$checkFirstName ? 'invalid' : 'validate' ?>" required>
                    <label for="firstName">Prénom<span class="red-text text-accent-4">*</span></label>
                    <span class="helper-text" data-error="<?= isset($_POST['firstName']) && !$checkFirstName ? 'Veuillez renseigner ce champ. Ex: Jean' : '' ?>"></span>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input value="<?= $checkAge ? htmlspecialchars($_POST['age']) : '' ?>" id="age" pattern="^(12[0-0]|1[01][0-9]|[1-9]?[0-9])$" type="text" name="age" aria-describedby="age" class="<?= isset($_POST['age']) && !$checkAge ? 'invalid' : 'validate' ?>" required>
                    <label for="age">Age<span class="red-text text-accent-4">*</span></label>
                    <span class="helper-text" data-error="<?= isset($_POST['age']) && !$checkAge ? 'Veuillez renseigner ce champ. Ex: 38 ans' : '' ?>"></span>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input value="<?= $checkSociety ? htmlspecialchars($_POST['society']) : '' ?>" id="society" type="text" name="society" pattern="^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ-]{2,20}$" aria-describedby="society" class="<?= isset($_POST['society']) && !$checkSociety ? 'invalid' : 'validate' ?>" required>
                    <label for="society">Société<span class="red-text text-accent-4">*</span></label>
                    <span class="helper-text" data-error="<?= isset($_POST['society']) && !$checkSociety ? 'Veuillez renseigner ce champ. Ex: Total' : '' ?>"></span>
                </div>
            </div>
            <button class="btn waves-effect waves-light" type="submit">Envoyer
                <i class="material-icons right">send</i>
            </button>
            <p><span class="red-text text-accent-4">* Champs obligatoires</span></p>
    </div>
    </form>
    </div>

    <?php

    if ($checkCivility && $checkFirstName && $checkLastName && $checkAge && $checkSociety) {

    ?>

        <div class="row">
            <div class="col s8  offset-s2 grey lighten-5">
                <p>Civilité : <?= htmlspecialchars($_POST['civility']) ?></p>
                <p>Nom : <?= htmlspecialchars($_POST['lastName']) ?></p>
                <p>Prénom : <?= htmlspecialchars($_POST['firstName']) ?></p>
                <p>Age : <?= htmlspecialchars($_POST['age']) ?></p>
                <p>Société : <?= htmlspecialchars($_POST['society']) ?></p>
            </div>
        </div>

    <?php } ?>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('select');
            var instances = M.FormSelect.init(elems);
        });
    </script>
</body>

</html>
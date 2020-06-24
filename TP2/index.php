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
        <form action="" method="post" novalidate class="col s8  offset-s2 grey lighten-5">
            <div class="row">
                <div class="input-field col s12">
                    <select name="civility" id="civility" class="validate" required>
                        <option value="" disabled selected class="grey-text">-</option>
                        <option value="Mr" <?= isset($_POST['civility']) && $_POST['civility'] ==  'Mr' ? 'selected' : '' ?>>Mr</option>
                        <option value="Mme" <?= isset($_POST['civility']) && $_POST['civility'] ==  'Mme' ? 'selected' : '' ?>>Mme</option>
                    </select>
                    <label>Civilité<span class="red-text text-accent-4">*</span></label>
                    <span class="helper-text red-text text-accent-4"><?= isset($_POST['button']) && !isset($_POST['civility']) ? 'Veuillez renseigner ce champ' : '' ?></span>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input value="<?= isset($_POST['lastName']) ? htmlspecialchars($_POST['lastName']) : '' ?>" id="lastName" type="text" name="lastName" aria-describedby="lastName" pattern="<?= substr($regexString, 1, -1) ?>" class="<?= isset($_POST['lastName']) && !$checkLastName ? 'invalid' : 'validate' ?>" required>
                    <label for="lastName">Nom<span class="red-text text-accent-4">*</span></label>
                    <!-- <span class="helper-text" data-error="<?= isset($_POST['lastName']) && !$checkLastName ? 'Veuillez renseigner ce champ. Ex: Dupont' : '' ?>"></span> -->
                    <span class="helper-text" data-error="<?= isset($_POST['button']) && empty($_POST['lastName']) && !preg_match($regexString, $_POST['lastName']) ? 'Veuillez renseigner ce champ' : 'Veuillez renseigner ce champ. Ex: Dupont' ?>"></span>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input value="<?= isset($_POST['firstName']) ? htmlspecialchars($_POST['firstName']) : '' ?>" id="firstName" pattern="<?= substr($regexString, 1, -1) ?>" type="text" name="firstName" aria-describedby="firstName" class="<?= isset($_POST['firstName']) && !$checkFirstName ? 'invalid' : 'validate' ?>" required>
                    <label for="firstName">Prénom<span class="red-text text-accent-4">*</span></label>
                    <span class="helper-text" data-error="<?= isset($_POST['firstName']) && !$checkFirstName ? (empty($_POST['firstName']) ? 'Veuillez renseigner ce champ' : 'Veuillez respecter le format. Ex: Jean') : '' ?>"></span>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input value="<?= $checkAge ? htmlspecialchars($_POST['age']) : '' ?>" id="age" pattern="<?= substr($regexAge, 1, -1) ?>" type="text" name="age" aria-describedby="age" class="<?= isset($_POST['age']) && !$checkAge ? 'invalid' : 'validate' ?>" required>
                    <label for="age">Age<span class="red-text text-accent-4">*</span></label>
                    <span class="helper-text" data-error="<?= isset($_POST['age']) && !$checkAge ? 'Veuillez renseigner ce champ. Ex: 38 ans' : '' ?>"></span>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input value="<?= $checkSociety ? htmlspecialchars($_POST['society']) : '' ?>" id="society" type="text" name="society" pattern="<?= substr($regexString, 1, -1) ?>" aria-describedby="society" class="<?= isset($_POST['society']) && !$checkSociety ? 'invalid' : 'validate' ?>" required>
                    <label for="society">Société<span class="red-text text-accent-4">*</span></label>
                    <span class="helper-text" data-error="<?= isset($_POST['society']) && !$checkSociety ? 'Veuillez renseigner ce champ. Ex: Total' : '' ?>"></span>
                </div>
            </div>
            <button class="btn waves-effect waves-light" name="button" type="submit">Envoyer
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
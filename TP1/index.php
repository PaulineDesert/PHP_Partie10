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
    <title>TP 1</title>
</head>

<body>

    <?php

    if ($checkFirstName && $checkLastName && $checkBirthDate && $checkBirthCountry && $checkNationality && $checkAdress && $checkEmail && $checkPhoneNumber && $checkSelect && $checkPoleEmploiNumber && $checkNumberOfBadge && $checkCodecademyLink && $checkSuperHero && $checkHacks && $checkExperience) {

    ?>

        <div class="row">
            <div class="col s8  offset-s2 grey lighten-5">
                <p>Prénom : <?= htmlspecialchars($_POST['firstName']) ?></p>
                <p>Nom : <?= htmlspecialchars($_POST['lastName']) ?></p>
                <p>Date de naissance : <?= htmlspecialchars($_POST['birthDate']) ?></p>
                <p>Pays de naissance : <?= htmlspecialchars($_POST['birthCountry']) ?></p>
                <p>Nationalité : <?= htmlspecialchars($_POST['nationality']) ?></p>
                <p>Adresse : <?= htmlspecialchars($_POST['adress']) ?></p>
                <p>E-mail : <?= htmlspecialchars($_POST['email']) ?></p>
                <p>Numéro de téléphone : <?= htmlspecialchars($_POST['phoneNumber']) ?></p>
                <p>Diplôme : <?= htmlspecialchars($_POST['select']) ?></p>
                <p>Numéro pôle emploi : <?= htmlspecialchars($_POST['poleEmploiNumber']) ?></p>
                <p>Nombre de badge : <?= htmlspecialchars($_POST['numberOfBadge']) ?></p>
                <p>Liens codecademy : <?= htmlspecialchars($_POST['codecademyLink']) ?></p>
                <p>Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</p>
                <p><?= htmlspecialchars($_POST['superHero']) ?></p>
                <p>Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</p>
                <p><?= htmlspecialchars($_POST['hacks']) ?></p>
                <p>Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce
                    formulaire ?</p>
                <p><?= htmlspecialchars($_POST['experience']) ?></p>
            </div>
        </div>

    <?php } else { ?>

        <div class="row">
            <h1>Formulaire</h1>
            <form action="" method="post" class="col s8  offset-s2 grey lighten-5">
                <div class="row">
                    <div class="input-field col s6">
                        <input value="<?= $checkFirstName ? htmlspecialchars($_POST['firstName']) : '' ?>" id="firstName" pattern="^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ-]{2,20}$" type="text" name="firstName" aria-describedby="firstName" class="validate" required>
                        <label for="firstName">Prénom<span class="red-text text-accent-4">*</span></label>
                        <span class="helper-text" data-error="<?= $checkFirstName ? 'Veuillez renseigner ce champ. Ex: Jean' : '' ?>"></span>
                    </div>
                    <div class="input-field col s6">
                        <input value="<?= $checkLastName ? htmlspecialchars($_POST['lastName']) : '' ?>" id="lastName" type="text" name="lastName" aria-describedby="lastName" pattern="^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ-]{2,20}$" class="<?= isset($_POST['lastName']) && !$checkLastName ? 'invalid' : 'validate' ?>" required>
                        <label for="lastName">Nom<span class="red-text text-accent-4">*</span></label>
                        <span class="helper-text" data-error="<?= isset($_POST['lastName']) && !$checkLastName ? 'Veuillez renseigner ce champ. Ex: Dupont' : '' ?>"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input value="<?= $checkBirthDate ? htmlspecialchars($_POST['birthDate']) : '' ?>" id="birthDate" type="date" name="birthDate" pattern="([12]\d{3}.(0[1-9]|1[0-2]).(0[1-9]|[12]\d|3[01]))" aria-describedby="birthDate" required>
                        <label for="birthDate">Date de naissance<span class="red-text text-accent-4">*</span></label>
                        <span class="helper-text" data-error="<?= !$checkBirthDate ? 'Veuillez renseigner ce champ. Ex: 18/10/1982' : '' ?>"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input value="<?= $checkBirthCountry ? htmlspecialchars($_POST['birthCountry']) : '' ?>" id="birthCountry" type="text" pattern="^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ-]{2,20}$" name="birthCountry" aria-describedby="birthCountry" class="<?= $checkBirthCountry ? 'validate' : 'invalid' ?>" required>
                        <label for="birthCountry">Pays de naissance<span class="red-text text-accent-4">*</span></label>
                        <span class="helper-text" data-error="<?= !$checkBirthCountry ? 'Veuillez renseigner ce champ. Ex: France' : '' ?>"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input value="<?= $checkNationality ? htmlspecialchars($_POST['nationality']) : '' ?>" id="nationality" type="text" name="nationality" pattern="^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ-]{2,20}$" aria-describedby="nationality" class="<?= $checkNationality ? 'validate' : 'invalid' ?>" required>
                        <label for="nationality">Nationalité<span class="red-text text-accent-4">*</span></label>
                        <span class="helper-text" data-error="<?= !$checkNationality ? 'Veuillez renseigner ce champ. Ex: Française' : '' ?>"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input value="<?= $checkAdress ? htmlspecialchars($_POST['adress']) : '' ?>" id="adress" type="text" name="adress" aria-describedby="adress" class="<?= $checkAdress ? 'validate' : 'invalid' ?>" required>
                        <label for="adress">Adresse<span class="red-text text-accent-4">*</span></label>
                        <span class="helper-text" data-error="<?= !$checkAdress ? 'Veuillez renseigner ce champ. Ex: 2 rue de la Bonté 75001 Paris' : '' ?>"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input value="<?= $checkEmail ? htmlspecialchars($_POST['email']) : '' ?>" id="email" type="email" name="email" pattern="[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]+" aria-describedby="email" class="<?= $checkEmail ? 'validate' : 'invalid' ?>" required>
                        <label for="email">E-mail<span class="red-text text-accent-4">*</span></label>
                        <span class="helper-text" data-error="<?= !$checkEmail ? 'Veuillez renseigner ce champ. Ex: jean.dupont@gmail.com' : '' ?>"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input value="<?= $checkPhoneNumber ? htmlspecialchars($_POST['phoneNumber']) : '' ?>" id="phoneNumber" pattern="^(0|\+33)[1-9]([-. ]?[0-9]{2}){4}$" type="tel" name="phoneNumber" aria-describedby="phoneNumber" class="<?= $checkPhoneNumber ? 'validate' : 'invalid' ?>" required>
                        <label for="phoneNumber">Téléphone<span class="red-text text-accent-4">*</span></label>
                        <span class="helper-text" data-error="<?= !$checkPhoneNumber ? 'Veuillez renseigner ce champ. Ex: 01 25 98 45 77' : '' ?>"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <select name="select" id="graduation">
                            <option value="" disabled selected class="grey-text">Niveau de diplôme</option>
                            <option value="Sans" <?= isset($_POST['select']) && $_POST['select'] ==  'Sans' ? 'selected' : '' ?>>Sans</option>
                            <option value="Bac" <?= isset($_POST['select']) && $_POST['select'] ==  'Bac' ? 'selected' : '' ?>>Bac</option>
                            <option value="Bac+2" <?= isset($_POST['select']) && $_POST['Bac+2'] ==  'Sans' ? 'selected' : '' ?>>Bac+2</option>
                            <option value="Bac+3 ou supérieur" <?= isset($_POST['select']) && $_POST['select'] ==  'Bac+3 ou supérieur' ? 'selected' : '' ?>>Bac+3 ou supérieur</option>
                        </select>
                        <label>Diplôme<span class="red-text text-accent-4">*</span></label>
                        <span class="helper-text" data-error="<?= !$checkSelect ? 'Veuillez renseigner ce champ' : '' ?>"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input value="<?= $checkPoleEmploiNumber ? htmlspecialchars($_POST['poleEmploiNumber']) : '' ?>" id="poleEmploiNumber" pattern="^[0-9]{7}[a-zA-Z]{1}$" type="text" name="poleEmploiNumber" aria-describedby="poleEmploiNumber" class="<?= $checkPoleEmploiNumber ? 'validate' : 'invalid' ?>" required>
                        <label for="poleEmploiNumber">Numéro pôle emploi<span class="red-text text-accent-4">*</span></label>
                        <span class="helper-text" data-error="<?= !$checkPoleEmploiNumber ? 'Veuillez renseigner ce champ. Ex: 1234567J' : '' ?>"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input value="<?= $checkNumberOfBadge ? htmlspecialchars($_POST['numberOfBadge']) : '' ?>" id="numberOfBadge" pattern="^[1-9]$|^1[0-5]$" type="text" name="numberOfBadge" aria-describedby="numberOfBadge" class="<?= $checkNumberOfBadge ? 'validate' : 'invalid' ?>" required>
                        <label for="numberOfBadge">Nombre de badge<span class="red-text text-accent-4">*</span></label>
                        <span class="helper-text" data-error="<?= !$checkNumberOfBadge ? 'Veuillez renseigner ce champ. Ex: 8' : '' ?>"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input value="<?= $checkCodecademyLink ? htmlspecialchars($_POST['codecademyLink']) : '' ?>" id="codecademyLink" pattern="^https?:\/\/(www\.)?(codecademy)\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&\/\/=]*)$" type="text" name="codecademyLink" aria-describedby="codecademyLink" class="<?= $checkCodecademyLink ? 'validate' : 'invalid' ?>" required>
                        <label for="codecademyLink">Liens codecademy<span class="red-text text-accent-4">*</span></label>
                        <span class="helper-text" data-error="<?= !$checkCodecademyLink ? 'Veuillez renseigner ce champ. Ex: https://www.codecademy.com/moncompte/' : '' ?>"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="superHero" name="superHero" aria-describedby="superHero" class="materialize-textarea" data-length="250" required></textarea>
                        <label for="superHero">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi
                            ?<span class="red-text text-accent-4">*</span></label>
                        <span class="helper-text" data-error="<?= !$checkSuperHero ? 'Veuillez renseigner ce champ. Ne pas dépasser 250 caractères' : '' ?>"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="hacks" name="hacks" aria-describedby="hacks" class="materialize-textarea" data-length="250" required></textarea>
                        <label for="hacks">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)<span class="red-text text-accent-4">*</span></label>
                        <span class="helper-text" data-error="<?= !$checkHacks ? 'Veuillez renseigner ce champ. Ne pas dépasser 250 caractères' : '' ?>"><?php isset($_POST['hacks']) ? strlen($_POST['hacks']) . ' caractères' : '0 caractères' ?></span>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <p class="grey-text">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique
                            avant de remplir ce formulaire ?<span class="red-text text-accent-4">*</span></p>
                        <p>
                            <label>
                                <input name="experience" value="Oui" type="radio" checked />
                                <span>Oui</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input name="experience" value="Non" type="radio" />
                                <span>Non</span>
                            </label>
                        </p>
                    </div>
                </div>
                <button class="btn waves-effect waves-light" type="submit">Envoyer
                    <i class="material-icons right">send</i>
                </button>
                <p><span class="red-text text-accent-4">* Champs obligatoires</span></p>
        </div>
        </form>
        </div>

    <?php } ?>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.datepicker');
            var instances = M.Datepicker.init(elems);
        });

        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('select');
            var instances = M.FormSelect.init(elems);
        });

        $(document).ready(function() {
            $('textarea#superHero, textarea#hacks').characterCounter();
        });

        $('#superHero').val('<?= $checkSuperHero ? htmlspecialchars($_POST['superHero']) : '' ?>');
        M.textareaAutoResize($('#superHero'));

        $('#hacks').val('<?= $checkHacks ? htmlspecialchars($_POST['hacks']) : '' ?>');
        M.textareaAutoResize($('#hacks'));
    </script>
</body>

</html>
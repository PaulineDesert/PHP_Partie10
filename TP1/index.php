<?php
$POST = false;
var_dump($_POST);
$regexName = '/^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ_-]{2,20}$/';
$regexString = '/^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ_-]{2,20}$/';
$regexDate = '/(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[13-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})/';
$regexMail = '/[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]+/';
$regexPhone = '/[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}/';
$regexAdress = '';
$regexPoleEmploi = '';
$regexBadge = '/[0-9]{1,2}$/';
$regexLink = '';
$regexTexarea = '';

$checkFirstName = isset($_POST['firstName']) && preg_match($regexString, $_POST['firstName']);
$checkLastName = isset($_POST['lastName']) && preg_match($regexString, $_POST['lastName']);
$checkBirthDate = isset($_POST['birthDate']) && preg_match($regexDate, $_POST['birthDate']);
$checkBirthCountry = isset($_POST['birthCountry']) && preg_match($regexString, $_POST['birthCountry']);
$checkNationality = isset($_POST['nationality']) && preg_match($regexString, $_POST['nationality']);
$checkAdress = isset($_POST['adress']) && preg_match($regexName, $_POST['adress']);
$checkEmail = isset($_POST['email']) && preg_match($regexName, $_POST['email']);
$checkPhoneNumber = isset($_POST['phoneNumber']) && preg_match($regexName, $_POST['phoneNumber']);
$checkSelect = isset($_POST['select']) && preg_match($regexName, $_POST['select']);
$checkPoleEmploiNumber = isset($_POST['poleEmploiNumber']) && preg_match($regexName, $_POST['poleEmploiNumber']);
$checkNumberOfBadge = isset($_POST['numberOfBadge']) && preg_match($regexName, $_POST['numberOfBadge']);
$checkCodecademyLink = isset($_POST['codecademyLink']) && preg_match($regexName, $_POST['codecademyLink']);
$checkSuperHero = isset($_POST['superHero']) && preg_match($regexName, $_POST['superHero']);
$checkHacks = isset($_POST['hacks']) && preg_match($regexName, $_POST['hacks']);
$checkExperienceYes = isset($_POST['experienceYes']) && preg_match($regexName, $_POST['experienceYes']);

// foreach ($check as $key => $value) {
//     if ($value == true) {
//         $POST = true;
//     }
// }
// $check = [
// 'checkFirstName' => isset($_POST['firstName']) && preg_match($regexName, $_POST['firstName']),
// 'checkLastName' => isset($_POST['lastName']) && preg_match($regexName, $_POST['lastName']),
// 'checkBirthDate' => isset($_POST['birthDate']) && preg_match($regexName, $_POST['birthDate']),
// 'checkBirthCountry' => isset($_POST['birthCountry']) && preg_match($regexName, $_POST['birthCountry']),
// 'checkNationality' => isset($_POST['nationality']) && preg_match($regexName, $_POST['nationality']),
// 'checkAdress' => isset($_POST['adress']) && preg_match($regexName, $_POST['adress']),
// 'checkEmail' => isset($_POST['email']) && preg_match($regexName, $_POST['email']),
// 'checkPhoneNumber' => isset($_POST['phoneNumber']) && preg_match($regexName, $_POST['phoneNumber']),
// 'checkSelect' => isset($_POST['select']) && preg_match($regexName, $_POST['select']),
// 'checkPoleEmploiNumber' => isset($_POST['poleEmploiNumber']) && preg_match($regexName, $_POST['poleEmploiNumber']),
// 'checkNumberOfBadge' => isset($_POST['numberOfBadge']) && preg_match($regexName, $_POST['numberOfBadge']),
// 'checkCodecademyLink' => isset($_POST['codecademyLink']) && preg_match($regexName, $_POST['codecademyLink']),
// 'checkSuperHero' => isset($_POST['superHero']) && preg_match($regexName, $_POST['superHero']),
// 'checkHacks' => isset($_POST['hacks']) && preg_match($regexName, $_POST['hacks']),
// 'checkExperienceYes' => isset($_POST['experienceYes']) && preg_match($regexName, $_POST['experienceYes'])
// ];
// var_dump($check);

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

    if ($checkFirstName && $checkLastName && $checkBirthDate && $checkBirthCountry && $checkNationality && $checkAdress && $checkEmail && $checkPhoneNumber && $checkSelect && $checkPoleEmploiNumber && $checkNumberOfBadge && $checkCodecademyLink && $checkSuperHero && $checkHacks && $checkExperienceYes) {

    ?>

    <div class="row">
        <div class="col s8  offset-s2 grey lighten-5">
            <p>Prénom : <?= htmlspecialchars($firstNameValue) ?></p>
            <p>Nom : <?= htmlspecialchars($lastNameValue) ?></p>
            <p>Date de naissance : <?= htmlspecialchars($birthDateValue) ?></p>
            <p>Pays de naissance : <?= htmlspecialchars($birthCountryValue) ?></p>
            <p>Nationalité : <?= htmlspecialchars($nationalityValue) ?></p>
            <p>Adresse : <?= htmlspecialchars($adressValue) ?></p>
            <p>E-mail : <?= htmlspecialchars($emailValue) ?></p>
            <p>Numéro de téléphone : <?= htmlspecialchars($phoneNumberValue) ?></p>
            <p>Diplôme : <?= htmlspecialchars($graduationValue) ?></p>
            <p>Numéro pôle emploi : <?= htmlspecialchars($poleEmploiNumberValue) ?></p>
            <p>Nombre de badge : <?= htmlspecialchars($numberOfBadgeValue) ?></p>
            <p>Liens codecademy : <?= htmlspecialchars($codecademyLinkValue) ?></p>
            <p>Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</p>
            <p><?= htmlspecialchars($superHeroValue) ?></p>
            <p>Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</p>
            <p><?= htmlspecialchars($hacksValue) ?></p>
            <p>Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce
                formulaire ?</p>
            <p><?= htmlspecialchars($experienceValue) ?></p>
        </div>
    </div>

    <?php } else { ?>

    <div class="row">
        <h1>Formulaire</h1>
        <form action="" method="post" class="col s8  offset-s2 grey lighten-5">
            <div class="row">
                <div class="input-field col s6">
                    <input value="<?= $checkFirstName ? htmlspecialchars($_POST['firstName']) : '' ?>" id="firstName"
                        pattern="^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ_-]{2,20}$"
                        type="text" name="firstName" aria-describedby="firstName"
                        class="<?= $checkFirstName ? 'validate' : 'invalid' ?>" required>
                    <label for="firstName">Prénom<span class="red-text text-accent-4">*</span></label>
                    <span class="helper-text" data-error="Veuillez renseigner ce champ"></span>
                </div>
                <div class="input-field col s6">
                    <input value="<?= $checkLastName ? htmlspecialchars($_POST['lastName']) : '' ?>" id="lastName"
                        type="text" name="lastName" aria-describedby="lastName"
                        pattern="^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ_-]{2,20}$"
                        class="<?= $checkLastName ? 'validate' : 'invalid' ?>" required>
                    <label for="lastName">Nom<span class="red-text text-accent-4">*</span></label>
                    <span class="helper-text" data-error="Veuillez renseigner ce champ"></span>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input value="<?= $checkBirthDate ? htmlspecialchars($_POST['birthDate']) : '' ?>" id="birthDate"
                        type="text" name="birthDate" pattern="(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[13-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})" aria-describedby="birthDate" class="datepicker" required>
                    <label for="birthDate">Date de naissance<span class="red-text text-accent-4">*</span></label>
                    <span class="helper-text" data-error="Veuillez renseigner ce champ"></span>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input value="<?= $checkBirthCountry ? htmlspecialchars($_POST['birthCountry']) : '' ?>"
                        id="birthCountry" type="text"
                        pattern="^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ_-]{2,20}$"
                        name="birthCountry" aria-describedby="birthCountry"
                        class="<?= $checkBirthCountry ? 'validate' : 'invalid' ?>" required>
                    <label for="birthCountry">Pays de naissance<span class="red-text text-accent-4">*</span></label>
                    <span class="helper-text" data-error="Veuillez renseigner ce champ"></span>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input value="<?= $checkNationality ? htmlspecialchars($_POST['nationality']) : '' ?>"
                        id="nationality" type="text" name="nationality"
                        pattern="^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ_-]{2,20}$"
                        aria-describedby="nationality" class="<?= $checkNationality ? 'validate' : 'invalid' ?>"
                        required>
                    <label for="nationality">Nationalité<span class="red-text text-accent-4">*</span></label>
                    <span class="helper-text" data-error="Veuillez renseigner ce champ"></span>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input value="<?= $checkAdress ? htmlspecialchars($_POST['adress']) : '' ?>" id="adress" type="text"
                        name="adress" aria-describedby="adress" class="<?= $checkAdress ? 'validate' : 'invalid' ?>"
                        required>
                    <label for="adress">Adresse<span class="red-text text-accent-4">*</span></label>
                    <span class="helper-text" data-error="Veuillez renseigner ce champ"></span>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input value="<?= $checkEmail ? htmlspecialchars($_POST['email']) : '' ?>" id="email" type="email"
                        name="email" aria-describedby="email" class="<?= $checkEmail ? 'validate' : 'invalid' ?>"
                        required>
                    <label for="email">E-mail<span class="red-text text-accent-4">*</span></label>
                    <span class="helper-text" data-error="Veuillez renseigner ce champ"></span>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input value="<?= $checkPhoneNumber ? htmlspecialchars($_POST['phoneNumber']) : '' ?>"
                        id="phoneNumber" type="tel" name="phoneNumber" aria-describedby="phoneNumber"
                        class="<?= $checkPhoneNumber ? 'validate' : 'invalid' ?>" required>
                    <label for="phoneNumber">Téléphone<span class="red-text text-accent-4">*</span></label>
                    <span class="helper-text" data-error="Veuillez renseigner ce champ"></span>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <select name="select" id="graduation">
                        <option value="" disabled selected class="grey-text">Niveau de diplôme</option>
                        <option value="Sans">Sans</option>
                        <option value="Bac">Bac</option>
                        <option value="Bac+2">Bac+2</option>
                        <option value="Bac+3 ou supérieur">Bac+3 ou supérieur</option>
                    </select>
                    <label>Diplôme<span class="red-text text-accent-4">*</span></label>
                    <span class="helper-text" data-error="Veuillez renseigner ce champ"></span>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input value="<?= $checkPoleEmploiNumber ? htmlspecialchars($_POST['poleEmploiNumber']) : '' ?>"
                        id="poleEmploiNumber" type="text" name="poleEmploiNumber" aria-describedby="poleEmploiNumber"
                        class="<?= $checkPoleEmploiNumber ? 'validate' : 'invalid' ?>" required>
                    <label for="poleEmploiNumber">Numéro pôle emploi<span
                            class="red-text text-accent-4">*</span></label>
                    <span class="helper-text" data-error="Veuillez renseigner ce champ"></span>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input value="<?= $checkNumberOfBadge ? htmlspecialchars($_POST['numberOfBadge']) : '' ?>"
                        id="numberOfBadge" type="text" name="numberOfBadge" aria-describedby="numberOfBadge"
                        class="<?= $checkNumberOfBadge ? 'validate' : 'invalid' ?>" required>
                    <label for="numberOfBadge">Nombre de badge<span class="red-text text-accent-4">*</span></label>
                    <span class="helper-text" data-error="Veuillez renseigner ce champ"></span>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input value="<?= $checkCodecademyLink ? htmlspecialchars($_POST['codecademyLink']) : '' ?>"
                        id="codecademyLink" type="text" name="codecademyLink" aria-describedby="codecademyLink"
                        class="<?= $checkCodecademyLink ? 'validate' : 'invalid' ?>" required>
                    <label for="codecademyLink">Liens codecademy<span class="red-text text-accent-4">*</span></label>
                    <span class="helper-text" data-error="Veuillez renseigner ce champ"></span>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <textarea value="<?= $checkSuperHero ? htmlspecialchars($_POST['superHero']) : '' ?>" id="superHero"
                        name="superHero" aria-describedby="superHero" class="materialize-textarea" required></textarea>
                    <label for="superHero">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi
                        ?<span class="red-text text-accent-4">*</span></label>
                    <span class="helper-text" data-error="Veuillez renseigner ce champ"></span>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <textarea value="<?= $checkHacks ? htmlspecialchars($_POST['hacks']) : '' ?>" id="hacks"
                        name="hacks" aria-describedby="hacks" class="materialize-textarea" required></textarea>
                    <label for="hacks">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)<span
                            class="red-text text-accent-4">*</span></label>
                    <span class="helper-text" data-error="Veuillez renseigner ce champ"></span>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <p class="grey-text">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique
                        avant de remplir ce formulaire ?<span class="red-text text-accent-4">*</span></p>
                    <p>
                        <label>
                            <input name="experienceYes" type="radio" checked />
                            <span>Oui</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input name="experienceNo" type="radio" />
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


    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.datepicker');
            var instances = M.Datepicker.init(elems);
        });

        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('select');
            var instances = M.FormSelect.init(elems);
        });
    </script>
</body>

</html>
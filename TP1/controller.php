<?php

$regexName = '/^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ-]{2,20}$/';
$regexString = '/^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ-]{2,20}$/';
$regexDate = '/([12]\d{3}.(0[1-9]|1[0-2]).(0[1-9]|[12]\d|3[01]))/';
$regexMail = '/[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]+/';
$regexPhone = '/^(0|\+33)[1-9]([-. ]?[0-9]{2}){4}$/';
$regexSelect = '/^(Sans)$|^(Bac)$|^(Bac\+2)$|^(Bac\+3 ou supérieur)$/';
$regexAdress = '/^[1-9]{1}+[0-9]{0,2}[, ]{1}[ a-zA-Zéèêëiîïôöüäç]{1,11}[, \"-]{1}?[ a-zA-Zéèêëiîïôöüäç]{2,12}?[, \"-]{0,1}?[ a-zA-Zéèêëiîïôöüäç]{0,12}?[, \"-]{0,1}?[ a-zA-Zéèêëiîïôöüäç]{1,12}?\d{5}(?:[- \ s]\d{4})?[ a-zA-Zéèêëiîïôöüäç]{1,11}?$/';
$regexPoleEmploi = '/^[0-9]{7}[a-zA-Z]{1}$/';
$regexBadge = '/^[1-9]$|^1[0-5]$/';
$regexLink = '/^https?:\/\/(www\.)?(codecademy)\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&\/\/=]*)$/';
$regexTexarea = '/[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ0-9\'\-" .]{3,250}/';
$regexExperience = '/^(Oui)$|^(Non)$/';

$checkFirstName = isset($_POST['firstName']) && preg_match($regexString, $_POST['firstName']);
$checkLastName = isset($_POST['lastName']) && preg_match($regexString, $_POST['lastName']);
$checkBirthDate = isset($_POST['birthDate']) && preg_match($regexDate, $_POST['birthDate']);
$checkBirthCountry = isset($_POST['birthCountry']) && preg_match($regexString, $_POST['birthCountry']);
$checkNationality = isset($_POST['nationality']) && preg_match($regexString, $_POST['nationality']);
$checkAdress = isset($_POST['adress']) && preg_match($regexAdress, $_POST['adress']);
$checkEmail = isset($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
// $checkEmail = isset($_POST['email']) && preg_match($regexMail, $_POST['email']);
$checkPhoneNumber = isset($_POST['phoneNumber']) && preg_match($regexPhone, $_POST['phoneNumber']);
$checkSelect = isset($_POST['select']) && preg_match($regexSelect, $_POST['select']);
$checkPoleEmploiNumber = isset($_POST['poleEmploiNumber']) && preg_match($regexPoleEmploi, $_POST['poleEmploiNumber']);
$checkNumberOfBadge = isset($_POST['numberOfBadge']) && preg_match($regexBadge, $_POST['numberOfBadge']);
$checkCodecademyLink = isset($_POST['codecademyLink']) && filter_var($_POST['codecademyLink'], FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED);
// $checkCodecademyLink = isset($_POST['codecademyLink']) && preg_match($regexLink, $_POST['codecademyLink']);
$checkSuperHero = isset($_POST['superHero']) && preg_match($regexTexarea, $_POST['superHero']);
$checkHacks = isset($_POST['hacks']) && preg_match($regexTexarea, $_POST['hacks']);
$checkExperience = isset($_POST['experience']) && preg_match($regexExperience, $_POST['experience']);
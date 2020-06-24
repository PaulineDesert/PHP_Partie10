<?php

$regexString = '/^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ-]{2,20}$/';
$regexCivility = '/^(Mr)$|^(Mme)$/';
$regexAge = '/^(12[0-0]|1[01][0-9]|[1-9]?[0-9])$/';
$errorMessage = '';

$checkCivility = isset($_POST['civility']) && preg_match($regexCivility, $_POST['civility']);
$checkFirstName = isset($_POST['firstName']) && preg_match($regexString, $_POST['firstName']);
$checkLastName = isset($_POST['lastName']) && preg_match($regexString, $_POST['lastName']);
$checkAge = isset($_POST['age']) && preg_match($regexAge, $_POST['age']);
$checkSociety = isset($_POST['society']) && preg_match($regexString, $_POST['society']);
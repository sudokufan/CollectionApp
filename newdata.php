<?php

require_once('functions.php');

$db = connectDB();

$newSet = $_POST;

$userChecked = checkUserInput($newSet);

if ($userChecked = true) {

    $errorCheck = addNewSet($newSet, $db);

    if ($errorCheck === false) {
        header('Location: index.php?error=wrongUser');
    } else {
        header('Location: index.php');
    }
} else {
    header('Location: index.php?error=wrongUser');
}
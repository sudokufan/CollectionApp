<?php

require_once('functions.php');

$db = connectDB();

$newSet = $_POST;

$thing = checkUserInput($newSet);

$errorCheck = addNewSet($newSet, $db);

if ( $errorCheck === false) {
    header('Location: index.php?error=wrongUser');
} else {
    header('Location: index.php');
}
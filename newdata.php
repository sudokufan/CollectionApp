<?php

require_once('functions.php');

$db = connectDB();

$newSet = $_POST;

if (checkUserInput($newSet) === false) {
    header('Location: index.php?error=wrongUser');
}

addNewSet($newSet, $db);

//header('Location: index.php');
?>
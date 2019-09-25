<?php

require_once('functions.php');

$db = connectDB();

$newSet = $_POST;

checkUserInput($newSet);

addNewSet($newSet, $db);

header('Location: index.php');
?>
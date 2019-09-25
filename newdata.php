<?php

require_once('functions.php');

$db = connectDB();

$newSet = $_POST;

addNewSet($newSet, $db);
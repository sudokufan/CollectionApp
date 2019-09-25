<?php

require_once('functions.php');

$db = connectDB();

//$newSet = $_POST;

addNewSet($_POST, $db);
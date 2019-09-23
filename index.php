<?php

require_once('functions.php');

$db = connectDB();


$query = $db->prepare("SELECT `name` FROM `users`");
$query->setFetchMode(PDO::FETCH_ASSOC);
$query->execute();
$result = $query-> fetchall();
$names = $result;

foreach ($names as $name){
    //array to string conversion error, needs fixing
    echo $name;
}
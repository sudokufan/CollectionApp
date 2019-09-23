<?php

require_once('functions.php');

$db = connectDB();

$sets = pullSetNames();
$setSize = pullSetSize();
$releaseDate = pullSetRelease();

foreach ($sets as $set){
    var_dump($set);
}
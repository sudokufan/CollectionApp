<?php

require_once('functions.php');

$db = connectDB();

$sets = pullSetNames();
$setSize = pullSetSize();
$releaseDate = pullSetRelease();

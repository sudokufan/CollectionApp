<?php

require_once('functions.php');

$db = connectDB();

$sets = pullSetNames($db);
$setSize = pullSetSize($db);
$releaseDate = pullSetRelease($db);

?>

<html lang="en-GB">
    <head>
        <link rel="stylesheet" type="text/css" href="normalize.css" />
        <link rel="stylesheet" type="text/css" href="styles.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SetCollector</title>
    </head>
        <body>

        <p class="container">SetCollector</p>

        </body>
</html>

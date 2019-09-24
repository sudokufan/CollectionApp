<?php

require_once('functions.php');

$db = connectDB();

$sets = pullSetData($db);

?>

<html lang="en-GB">
    <head>
        <link rel="stylesheet" type="text/css" href="normalize.css" />
        <link rel="stylesheet" type="text/css" href="styles.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SetCollector</title>
    </head>
        <body>

        <nav class="container">
                <h1>SetCollector</h1>
        </nav>

        <div>
            <div class="setsBody" class="container">

                <?php

                echo displaySetData($sets);

                ?>

        </body>
</html>

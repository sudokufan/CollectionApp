<?php

require_once('functions.php');

$db = connectDB();

$sets = retrieveCardSets($db);

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


        <div class="setsBody" class="container">

            <?php echo displaySetCollection($sets); ?>

        </div>

        <form method=post action="newdata.php">
            Set name:<br>
            <input type="text" name="name" placeholder="eg: Core Set 2020" required>
            <br>
            Release date:<br>
            <input type="text" name="released" placeholder="format: yyyy-mm-dd" required>
            <br>
            # of cards:<br>
            <input type="number" min="1" max="500" name="cards" placeholder="eg: 230" required>
            <br>
            <input type="submit">
            </form>
  
    </body>
</html>

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

        <form>
            Set name:<br>
            <input type="text" name="name" value="eg: Core Set 2020">
            <br>
            Release date:<br>
            <input type="text" name="released" value="format: yyyy-mm-dd">
            <br>
            # of cards:<br>
            <input type="text" name="cards" value="eg: 230">
            <br>
            <input type="submit">
        </form>

    </body>
</html>

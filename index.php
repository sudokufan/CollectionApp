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

        <nav class="container">
                <h1>SetCollector</h1>
        </nav>

        <div>
            <div class="setsBody" class="container">
                <div class="set">
                    <header><h1>SET NAME</h1></header>
<!--   img tag will show the set symbol here    <img> -->
                    <h1>Release Date</h1>
                    <h1># of cards</h1>
                </div>

                <div class="set">
                    <header><h1>SET NAME #2</h1></header>
                    <!--   img tag will show the set symbol here    <img> -->
                    <h1>Release Date</h1>
                    <h1># of cards</h1>
                </div>

                <div class="set">
                    <header><h1>SET NAME #3</h1></header>
                    <!--   img tag will show the set symbol here    <img> -->
                    <h1>Release Date</h1>
                    <h1># of cards</h1>
                </div>

                <div class="set">
                </div>

                <div class="set">
                </div>

                <div class="set">
                </div>

                <div class="set">
                </div>

             </div>
        </div>

        </body>
</html>

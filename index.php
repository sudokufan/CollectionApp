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
            <div class="productMain">
                <div class="product">
                    <p>AKG AVIATION AV100 ANR HEADSET</p>
                    <p>So I walked into the club like ...</p>
                    <p>From
                        <span class="currentPrice">$66.00</span>
                        <span class="oldPrice">$76.00</span>
                    </p>
                </div>
                <div class="product">
                </div>
                <div class="product">
                </div>
                <div class="product">
                </div>
                <div class="product">
                </div>
                <div class="product">
                </div>
                <div class="product">
                </div>
                <div class="product">
                </div>
            </div>
        </div>

        </body>
</html>

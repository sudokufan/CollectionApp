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
                    <img src="https://cdn.shopify.com/s/files/1/1634/8185/products/akg_aviation_av100_anr_headset_02_270x335_crop_top.png?v=1480672940">
                    <p>AKG AVIATION AV100 ANR HEADSET</p>
                    <p>So I walked into the club like ...</p>
                    <p>From
                        <span class="currentPrice">$66.00</span>
                        <span class="oldPrice">$76.00</span>
                    </p>
                </div>
                <div class="product"><img src="https://cdn.shopify.com/s/files/1/1634/8185/products/alpha_industries_men_s_cwu_pilot_x_flight_jacket_02_270x335_crop_top.png?v=1480672952">
                </div>
                <div class="product"><img src="https://cdn.shopify.com/s/files/1/1634/8185/products/american_optical_original_pilot_eyewear_57mm_frame_2_270x335_crop_top.png?v=1480672961">
                </div>
                <div class="product"><img src="https://cdn.shopify.com/s/files/1/1634/8185/products/aspen_avionics_evolution_02_270x335_crop_top.png?v=1480672974">
                </div>
                <div class="product"><img src="https://cdn.shopify.com/s/files/1/1634/8185/products/avidyne_ex5000_r8_0_cirrus_multifunction_display_02_270x335_crop_top.png?v=1480673008">
                </div>
                <div class="product"><img src="https://cdn.shopify.com/s/files/1/1634/8185/products/cocoons_fitovers_polarized_sunglasses_pilot_lg_02_270x335_crop_top.png?v=1480673019">
                </div>
                <div class="product"><img src="https://cdn.shopify.com/s/files/1/1634/8185/products/david_clark_dc_x11p_panel_anr_enc_aviation_pilot_headset_2_270x335_crop_top.png?v=1480673029">
                </div>
                <div class="product"><img src="https://cdn.shopify.com/s/files/1/1634/8185/products/garmin_aera_796_02_270x335_crop_top.png?v=1480673041">
                </div>
            </div>
        </div>

        </body>
</html>

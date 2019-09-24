<?php


/**
 * connects SQL database to PHP
 */
function connectDB() :PDO {
    $db = new PDO ('mysql:host=db; dbname=AlexCollection', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

/**
 * requests card set details from database
 *
 * @param array $db the PDO connection to SQL
 *
 * @return array the data from SQL
 */
function retrieveCardSets(PDO $db) :array {
    $query = $db->prepare("SELECT `name`, `released`, `cards` FROM `MTGSets`");
    $query->execute();
    $result = $query-> fetchAll();
    $sets = $result;
    return $result;
}

/**
 * an indexed array of assoc arrays of card sets
 *
 * @param array $sets the set data from SQL
 *
 * @return string the outputted divs containing data
 */
function displaySetData(array $sets) :string {
    $result = '';
    foreach ($sets as $set){
        $result .= '<div class="set"> <h1>' . $set['name'] . '</h1>
                    <h2> Release Date: ' . $set['released'] . '</h2>
                    <h2>' . $set['cards'] . ' cards</h2>
                    </div>';
    }

    return $result;
}
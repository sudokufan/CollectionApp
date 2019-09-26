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
 * displays set collection data on the front end
 *
 * @param array $sets an indexed array of assoc arrays of card sets
 *
 * @return string the outputted divs containing data
 */
function displaySetCollection(array $sets) :string {
    $result = '';

    if (is_array($sets[0]) == true) {
        if (array_key_exists("name", $sets[0])) {
            foreach ($sets as $set){
                $result .= '<div class="set"> <h1>' . $set['name'] . '</h1>
                    <h2> Release Date: ' . $set['released'] . '</h2>
                    <h2>' . $set['cards'] . ' cards</h2>
                    </div>';
            }
        } else {
            return 'Incorrect SQL data entered; check database';
        }
    }
    return $result;
}

/**
 * checks new set inputs are valid
 *
 * @param array $newSet the set info captured from user form
 *
 * @return bool true/false conclusion for user input validity
 */
function checkUserInput(array $newSet) :bool {
    $valid = "";
    if (is_string($newSet['name']) === false) {
        $valid = false;
        $failedAt = 'name';
    } elseif (strlen($newSet['name']) > 255) {
        $valid = false;
        $failedAt = 'name';
    } elseif (is_int((int)$newSet['cards']) === false) {
        $valid = false;
        $failedAt = 'cards';
    } elseif (strlen($newSet['cards']) > 255) {
        $valid = false;
        $failedAt = 'cards';
    } elseif (is_string($newSet['released']) === false) {
        $valid = false;
        $failedAt = 'released';
    } elseif (strlen($newSet['released']) > 10) {
        $valid = false;
        $failedAt = 'released';
    } else {
        $valid = true;
        $failedAt = "NA";
    }
    return $valid;
}

/**
 * adds new card set to the page
 *
 * @param array $newSet the set info captured from user form
 *
 * @param PDO $db connection to database where set info is stored
 */
function addNewSet(array $newSet, PDO $db) {

        $statement = "INSERT INTO `MTGSets` (`name`, `cards`, `released`) VALUES (?, ?, ?)";
        $query = $db->prepare($statement);
        return $query->execute([$newSet['name'], $newSet['cards'], $newSet['released']]);
}
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
            return 'Incorrect datatype; check input';
        }
    }
    return $result;
}


function addNewSet(array $newSet, PDO $db) {

    if (isset($newSet)) {

        $statement = "INSERT INTO `MTGSets` (`name`, `cards`, `released`) VALUES (?, ?, ?)";

        $query = $db->prepare($statement);

//        $query->bindParam(':name', $newSet['name']);
//        $query->bindParam(':released', $newSet['released']);
//        $query->bindParam(':cards', $newSet['cards']);

        $query->execute([$newSet['name'], $newSet['cards'], $newSet['released']]);
        
    } else {
        echo 'Incorrect data.';
    }
}
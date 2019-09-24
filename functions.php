<?php


/**
 * connects SQL database to PHP
 */
function connectDB()
{
    $db = new PDO ('mysql:host=db; dbname=AlexCollection', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

/**
 * pulls set names from PDO
 */
function pullSetData(array $db) :array
{
    $query = $db->prepare("SELECT `name`, `cards`, `released` FROM `MTGSets`");
    $query->execute();
    $result = $query-> fetchAll();
    $sets = $result;
    return $sets;
}

function

$car['make']

function sayHi(array $names) :string {

    //create an empty string in a var to catch the output into
    $result = '';

    //loop over the names and concatenate each one as a p tag onto the existing result variable
    //we dont define result inside the loop otherwise it would be overwritten each time
    foreach ($names as $name){
        $result .= '<p>Hello ' . $name . '</p>';
    }

    //return a giant string with all p tags concatenated together in it.
    return $result;
}


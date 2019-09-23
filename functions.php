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
function pullSetNames($db)
{
    $query = $db->prepare("SELECT `name` FROM `MTGSets`");
    $query->execute();
    $result = $query-> fetchAll();
    $sets = $result;
    return $sets;
}

/**
 * pulls set size from PDO
 */
function pullSetSize($db)
{
    $query = $db->prepare("SELECT `cards` FROM `MTGSets`");
    $query->execute();
    $result = $query-> fetchAll();
    $setSize = $result;
    return $setSize;
}

/**
 * pulls release dates from PDO
 */
function pullSetRelease($db)
{
    $query = $db->prepare("SELECT `released` FROM `MTGSets`");
    $query->execute();
    $result = $query-> fetchAll();
    $releaseDate = $result;
    return $releaseDate;
}
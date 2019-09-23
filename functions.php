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
function pullSetNames()
{
    $query = $db->prepare("SELECT `name` FROM `MTGSets`");
    $query->setFetchMode(PDO::FETCH_ASSOC);
    $query->execute();
    $result = $query-> fetchall();
    $sets = $result;
    return $sets;
}

/**
 * pulls set size from PDO
 */
function pullSetSize()
{
    $query = $db->prepare("SELECT `cards` FROM `MTGSets`");
    $query->setFetchMode(PDO::FETCH_ASSOC);
    $query->execute();
    $result = $query-> fetchall();
    $setSize = $result;
    return $setSize;
}

/**
 * pulls release dates from PDO
 */
function pullSetRelease()
{
    $query = $db->prepare("SELECT `name` FROM `MTGSets`");
    $query->setFetchMode(PDO::FETCH_ASSOC);
    $query->execute();
    $result = $query-> fetchall();
    $releaseDate = $result;
    return $releaseDate;
}
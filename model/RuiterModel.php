<?php

function getAllRuiters(){
    $db = openDatabaseConnection();

    $sql = "SELECT * FROM ruiters";
    $query = $db->prepare($sql);
    $query->execute();

    $db = null;

    return $query->fetchAll();
}
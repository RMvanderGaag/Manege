<?php

function getAllRaces(){
    try {
            // Open de verbinding met de database
            $conn=openDatabaseConnection();
            $sql = "SELECT * FROM race";
            $query = $conn->prepare($sql);
            $query->execute();
            $result = $query->fetchAll();
        }
        catch(PDOException $e){

            echo "Connection failed: " . $e->getMessage();
        }
        
        $conn = null;
        return $result;
}

function getRace($id){
    try {
        // Open de verbinding met de database
        $conn=openDatabaseConnection();
        $sql = "SELECT * FROM race WHERE id = :id";
        $query = $conn->prepare($sql);
        $query->bindParam(":id", $id);
        $query->execute();
        $result = $query->fetch();
    }
    catch(PDOException $e){

        echo "Connection failed: " . $e->getMessage();
    }
    
    $conn = null; 
    return $result;
}


function createRace($raceName, $raceHeight){
    try {
            // Open de verbinding met de database
            $conn=openDatabaseConnection();
            $sql = "INSERT INTO race(naam, hoogte) VALUES(:raceName, :raceHeight)";
            $query = $conn->prepare($sql);
            $query->bindParam(":raceName", $raceName);
            $query->bindParam(":raceHeight", $raceHeight);
            $query->execute();
        }
        catch(PDOException $e){

            echo "Connection failed: " . $e->getMessage();
        }
        
        $conn = null;
}

function destroy($id){
    try {
            // Open de verbinding met de database
            $conn=openDatabaseConnection();
            $sql = "DELETE FROM race WHERE id = :id";
            $query = $conn->prepare($sql);
            $query->bindParam(":id", $id);
            $query->execute();
            
        }
        catch(PDOException $e){

            echo "Connection failed: " . $e->getMessage();
        }
        
        $conn = null;
}

function update($id, $raceName, $raceHeight){
    try {
        // Open de verbinding met de database
        $conn=openDatabaseConnection();
        $sql = "UPDATE race SET naam = :raceName, hoogte = :raceHeight WHERE id = :id";
        $query = $conn->prepare($sql);
        $query->bindParam(":id", $id);
        $query->bindParam(":raceName", $raceName);
        $query->bindParam(":raceHeight", $raceHeight);
        $query->execute();
    }
    catch(PDOException $e){

        echo "Connection failed: " . $e->getMessage();
    }
    
    $conn = null;
}
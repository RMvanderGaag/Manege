<?php
function getAllHorses(){
    try {
            // Open de verbinding met de database
            $conn=openDatabaseConnection();
            $sql = "SELECT * FROM horse";
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

function getHorse($id){
    try {
        // Open de verbinding met de database
        $conn=openDatabaseConnection();
        $sql = "SELECT * FROM horse WHERE id = :id";
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


function createHorse($horseName, $horseAge, $horseRace){
    try {
            // Open de verbinding met de database
            $conn=openDatabaseConnection();
            $sql = "INSERT INTO horse(naam, leeftijd, race_id) VALUES(:horseName, :horseHeight, :horseRace)";
            $query = $conn->prepare($sql);
            $query->bindParam(":horseName", $horseName);
            $query->bindParam(":horseHeight", $horseAge);
            $query->bindParam(":horseRace", $horseRace);
            $query->execute();
        }
        catch(PDOException $e){

            echo "Connection failed: " . $e->getMessage();
        }
        
        $conn = null;
}

function destroyH($id){
    try {
            // Open de verbinding met de database
            $conn=openDatabaseConnection();
            $sql = "DELETE FROM horse WHERE id = :id";
            $query = $conn->prepare($sql);
            $query->bindParam(":id", $id);
            $query->execute();
            
        }
        catch(PDOException $e){

            echo "Connection failed: " . $e->getMessage();
        }
        
        $conn = null;
}

function updateH($id, $horseName, $horseAge, $horseRace){
    try {
        // Open de verbinding met de database
        $conn=openDatabaseConnection();
        $sql = "UPDATE horse SET naam = :horseName, leeftijd = :horseAge, race_id = :horseRace WHERE id = :id";
        $query = $conn->prepare($sql);
        $query->bindParam(":id", $id);
        $query->bindParam(":horseName", $horseName);
        $query->bindParam(":horseAge", $horseAge);
        $query->bindParam(":horseRace", $horseRace);
        $query->execute();
    }
    catch(PDOException $e){

        echo "Connection failed: " . $e->getMessage();
    }
    
    $conn = null;
}
    
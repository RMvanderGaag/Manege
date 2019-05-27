<?php

function getAllReservations(){
    try {
            // Open de verbinding met de database
            $conn=openDatabaseConnection();
            $sql = "SELECT * FROM reservation";
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

function getReservation($id){
    try {
        // Open de verbinding met de database
        $conn=openDatabaseConnection();
        $sql = "SELECT * FROM reservation WHERE id = :id";
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


function createReservation($reservationName, $reservationHorse, $reservationStartTime){
    try {
            // Open de verbinding met de database
            $conn=openDatabaseConnection();
            $sql = "INSERT INTO reservation(customer_id, horse_id, start_time) VALUES(:reservationName, :reservationHorse, :reservationStartTime)";
            $query = $conn->prepare($sql);
            $query->bindParam(":reservationName", $reservationName);
            $query->bindParam(":reservationHorse", $reservationHorse);
            $query->bindParam(":reservationStartTime", $reservationStartTime);
            $query->execute();
        }
        catch(PDOException $e){

            echo "Connection failed: " . $e->getMessage();
        }
        
        $conn = null;
}

function destroyR($id){
    try {
            // Open de verbinding met de database
            $conn=openDatabaseConnection();
            $sql = "DELETE FROM reservation WHERE id = :id";
            $query = $conn->prepare($sql);
            $query->bindParam(":id", $id);
            $query->execute();
            
        }
        catch(PDOException $e){

            echo "Connection failed: " . $e->getMessage();
        }
        
        $conn = null;
}

function updateReservation($id, $reservationName , $reservationHorse, $reservationStartTime){
    try {
        // Open de verbinding met de database
        $conn=openDatabaseConnection();
        $sql = "UPDATE reservation SET customer_id = :reservationName, horse_id = :reservationHorse, start_time = :reservationStartTime WHERE id = :id";
        $query = $conn->prepare($sql);
        $query->bindParam(":id", $id);
        $query->bindParam(":reservationName", $reservationName);
        $query->bindParam(":reservationHorse", $reservationHorse);
        $query->bindParam(":reservationStartTime", $reservationStartTime);
        $query->execute();
    }
    catch(PDOException $e){

        echo "Connection failed: " . $e->getMessage();
    }
    
    $conn = null;
}
    


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

function getDataReservation($id){
    try {
        // Open de verbinding met de database
        $conn=openDatabaseConnection();
        $sql = "SELECT id, customer_id, horse_id, DATE_FORMAT(start_time, '%Y-%m-%dT%H:%i') as start_time, ride FROM reservation WHERE id = :id";
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

function getReservation($id){
    try {
        // Open de verbinding met de database
        $conn=openDatabaseConnection();
        $sql = "SELECT * FROM `reservation` WHERE id = :id";
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


function createReservation($reservationName, $reservationHorse, $reservationStartTime, $reservationRide){
    try {
            // Open de verbinding met de database
            $conn=openDatabaseConnection();
            $sql = "INSERT INTO reservation(customer_id, horse_id, start_time, ride) VALUES(:reservationName, :reservationHorse, :reservationStartTime, :reservationRide)";
            $query = $conn->prepare($sql);
            $query->bindParam(":reservationName", $reservationName);
            $query->bindParam(":reservationHorse", $reservationHorse);
            $query->bindParam(":reservationStartTime", $reservationStartTime);
            $query->bindParam(":reservationRide", $reservationRide);
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

function updateReservation($id, $reservationName , $reservationHorse, $reservationStartTime, $reservationRide){
    try {
        // Open de verbinding met de database
        $conn=openDatabaseConnection();
        $sql = "UPDATE reservation SET customer_id = :reservationName, horse_id = :reservationHorse, start_time = :reservationStartTime, ride = :reservationRide WHERE id = :id";
        $query = $conn->prepare($sql);
        $query->bindParam(":id", $id);
        $query->bindParam(":reservationName", $reservationName);
        $query->bindParam(":reservationHorse", $reservationHorse);
        $query->bindParam(":reservationStartTime", $reservationStartTime);
        $query->bindParam(":reservationRide", $reservationRide);
        $query->execute();
    }
    catch(PDOException $e){

        echo "Connection failed: " . $e->getMessage();
    }
    
    $conn = null;
}

function check($reservationStartTime, $reservationRide, $reservationHorse, $id = null){
    try {
            // Open de verbinding met de database
            $conn=openDatabaseConnection();
            $sql = "SELECT *, DATE_ADD(start_time, INTERVAL ride HOUR) as end_time from `reservation` WHERE (
                (
                  start_time <= :reservationStartTime  AND  DATE_ADD(start_time, INTERVAL ride HOUR) >= :reservationStartTime
                ) OR (
                  start_time <= DATE_ADD(:reservationStartTime, INTERVAL :reservationRide HOUR) AND  DATE_ADD(start_time, INTERVAL ride HOUR)>=DATE_ADD(:reservationStartTime, INTERVAL :reservationRide HOUR)
                )) AND horse_id = :reservationHorse";
            if(is_numeric($id)){
                $sql .= " AND id <> :id";
            }
            $query = $conn->prepare($sql);
            if(is_numeric($id)){
                $query->bindParam(":id", $id);
            }
            $query->bindParam(":reservationStartTime", $reservationStartTime);
            $query->bindParam(":reservationRide", $reservationRide);
            $query->bindParam(":reservationHorse", $reservationHorse);
            $query->execute();
            $result = $query->fetchAll();
            if(count($result) > 0){
                return false;
            }else{
                return true;
            }
           
        }
    
    catch(PDOException $e){

        echo "Connection failed: " . $e->getMessage();
    }
    
    $conn = null;
 
}

    


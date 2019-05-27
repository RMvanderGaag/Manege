<?php

function getAllCustomers(){
    try {
            // Open de verbinding met de database
            $conn=openDatabaseConnection();
            $sql = "SELECT * FROM customer";
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

function getCustomer($id){
    try {
        // Open de verbinding met de database
        $conn=openDatabaseConnection();
        $sql = "SELECT * FROM customer WHERE id = :id";
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


function createCustomer($customerName, $customerAdres, $customerZipcode, $customerCity, $customerPhonenumber, $customerEmail){
    try {
            // Open de verbinding met de database
            $conn=openDatabaseConnection();
            $sql = "INSERT INTO customer(naam, adres, postcode, stad, telefoon, email) VALUES(:customerName, :customerAdres, :customerZipcode, :customerCity, :customerPhonenumber, :customerEmail)";
            $query = $conn->prepare($sql);
            $query->bindParam(":customerName", $customerName);
            $query->bindParam(":customerAdres", $customerAdres);
            $query->bindParam(":customerZipcode", $customerZipcode);
            $query->bindParam(":customerCity", $customerCity);
            $query->bindParam(":customerPhonenumber", $customerPhonenumber);
            $query->bindParam(":customerEmail", $customerEmail);
            $query->execute();
        }
        catch(PDOException $e){

            echo "Connection failed: " . $e->getMessage();
        }
        
        $conn = null;
}

function destroyCustomer($id){
    try {
            // Open de verbinding met de database
            $conn=openDatabaseConnection();
            $sql = "DELETE FROM customer WHERE id = :id";
            $query = $conn->prepare($sql);
            $query->bindParam(":id", $id);
            $query->execute();
            
        }
        catch(PDOException $e){

            echo "Connection failed: " . $e->getMessage();
        }
        
        $conn = null;
}

function update($id, $customerName, $customerAdres, $customerZipcode, $customerCity, $customerPhonenumber, $customerEmail){
    try {
        // Open de verbinding met de database
        $conn=openDatabaseConnection();
        $sql = "UPDATE customer SET naam = :customerName, adres = :customerAdres, postcode = :customerZipcode, stad = :customerCity, telefoon = :customerPhonenumber, email = :customerEmail WHERE id = :id";
        $query = $conn->prepare($sql);
        $query->bindParam(":id", $id);
        $query->bindParam(":customerName", $customerName);
        $query->bindParam(":customerAdres", $customerAdres);
        $query->bindParam(":customerZipcode", $customerZipcode);
        $query->bindParam(":customerCity", $customerCity);
        $query->bindParam(":customerPhonenumber", $customerPhonenumber);
        $query->bindParam(":customerEmail", $customerEmail);
        $query->execute();
    }
    catch(PDOException $e){

        echo "Connection failed: " . $e->getMessage();
    }
    
    $conn = null;
}
    
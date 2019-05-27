<?php
require(ROOT . "model/CustomerModel.php");


function index(){
    $getAllCustomers = getAllCustomers();
    render("customers/index", array("customers" => $getAllCustomers));
}

function addCustomer(){
    render("customers/addCustomer");
}

function createNewCustomer(){
    createCustomer($_POST["customerName"], $_POST["customerAdres"], $_POST["customerZipcode"], $_POST["customerCity"], $_POST["customerPhonenumber"], $_POST["customerEmail"]);
    header("location: ".URL."customers/index");
}

function deleteCustomer($id){
    $getCustomer = getCustomer($id);
    render("customers/delete", array("customer" => $getCustomer));
}

function destroy($id){
    destroyCustomer($id);
    header("location: ".URL."customers/index");
}

function editCustomer($id){
    $getCustomer = getCustomer($id);
    render("customers/editCustomer", array("customer" => $getCustomer));
}

function updateCustomer($id){
    update($id, $_POST["customerName"], $_POST["customerAdres"], $_POST["customerZipcode"], $_POST["customerCity"], $_POST["customerPhonenumber"], $_POST["customerEmail"]);
    header("location: ".URL."customers/index");
}
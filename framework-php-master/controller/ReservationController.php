<?php 
require(ROOT . "model/HorsesModel.php");
require(ROOT . "model/CustomerModel.php");
require(ROOT . "model/ReservationModel.php");

function index(){
    $getAllReservations = getAllReservations();
    render("reservation/index", array("reservations" => $getAllReservations));
}

function addReservation(){
    render("reservation/addReservation");

}

function createNewReservation(){
    createReservation($_POST["reservationName"], $_POST["reservationHorse"], $_POST["reservationStartTime"]);
    header("location: ".URL."reservation/index");
}

function deleteReservation($id){
    $getReservation = getReservation($id);
    render("reservation/deleteReservation", array("reservation" => $getReservation));
}

function destroyReservation($id){
    destroyR($id);
    header("location: ".URL."reservation/index");
}

function editRes($id){
    $getReservation = getReservation($id);
    render("reservation/editReservation", array("reservation" => $getReservation));
}

function updateRes($id){
    $getReservation = getReservation($id);
    updateReservation($id, $_POST["reservationName"], $_POST["reservationHorse"], $_POST["reservationStartTime"]);
    header("location: ".URL."reservation/index");
}

function checkReservation(){
    check($_POST["reservationName"], $_POST["reservationHorse"], $_POST["reservationStartTime"], $_POST["reservationRide"]);
    
}
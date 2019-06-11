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
    if(check($_POST["reservationStartTime"], $_POST["reservationRide"], $_POST["reservationHorse"])){
        createReservation($_POST["reservationName"], $_POST["reservationHorse"], $_POST["reservationStartTime"], $_POST["reservationRide"]);
        header("location: ".URL."reservation/index");
    }else{
        $data = array(
            "id" => $id,
            "customer_id" => !isset($_POST["reservationName"]) ? "" :$_POST["reservationName"],
            "horse_id" => !isset($_POST["reservationHorse"]) ? "" :$_POST["reservationHorse"],
            "start_time" => !isset($_POST["reservationStartTime"]) ? "" :$_POST["reservationStartTime"],
            "ride" => !isset($_POST["reservationRide"]) ? "" :$_POST["reservationRide"]
        );
        render("reservation/addReservation", array("reservation" => $data,
        "error" => "Er is al een reservering met deze gegevens",
        "customers" => getAllCustomers(),
        "horses" => getAllHorses()
    ));
    }
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
    $getReservation = getDataReservation($id);
    render("reservation/editReservation", array("reservation" => $getReservation, "customers" => getAllCustomers(), "horses" => getAllHorses()));
}

function updateRes($id){
    $getReservation = getReservation($id);
    if(check($_POST["reservationStartTime"], $_POST["reservationRide"], $_POST["reservationHorse"], $id)){
        updateReservation($id, $_POST["reservationName"], $_POST["reservationHorse"], $_POST["reservationStartTime"], $_POST["reservationRide"]);
        header("location: ".URL."reservation/index");
    }else{
       $data = array(
           "id" => $id,
           "customer_id" => $_POST["reservationName"],
           "horse_id" => $_POST["reservationHorse"],
           "start_time" => $_POST["reservationStartTime"],
           "ride" => $_POST["reservationRide"]
       );
       render("reservation/editReservation", array(
           "reservation" => $data,
           "error" => "Er is al een reservering met deze gegevens",
           "customers" => getAllCustomers(),
           "horses" => getAllHorses()
       ));
    }
}

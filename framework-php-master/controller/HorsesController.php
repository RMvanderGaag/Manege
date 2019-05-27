<?php
require(ROOT . "model/HorsesModel.php");
require(ROOT . "model/RacesModel.php");

function index(){
    $getAllHorses = getAllHorses();
    render("horses/index", array("horses" => $getAllHorses));
}

function addHorse(){
    render("horses/addHorse");
}

function createNewHorse(){
    createHorse($_POST["horseName"], $_POST["horseAge"], $_POST["horseRace"]);
    header("location: index");
}

function deleteHorse($id){
    $getHorse = getHorse($id);
    render("horses/delete", array("horse" => $getHorse));
}

function destroyHorse($id){
    destroyH($id);
    header("location: ".URL."horses/index");
}

function editHorse($id){
    $getHorse = getHorse($id);
    render("horses/edit", array("horse" => $getHorse));
}

function updateHorse($id){
    updateH($id, $_POST["horseName"], $_POST["horseAge"], $_POST["horseRace"]);
    header("location: ".URL."horses/index");
}
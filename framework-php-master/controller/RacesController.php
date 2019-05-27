<?php
require(ROOT . "model/RacesModel.php");

function index(){
    $getAllRaces = getAllRaces();
    render("races/index", array("races" => $getAllRaces));
}

function inputNewRace(){
    render("races/addRace");
}

function createNewRace(){
    createRace($_POST["raceName"], $_POST["raceHeight"]);
    header("location: index");
}

function deleteRace($id){
    $getRace = getRace($id);
    render("races/delete", array("race" => $getRace));
}

function destroyRace($id){
    destroy($id);
    header("location: ".URL."races/index");
}

function editRace($id){
    $getRace = getRace($id);
    render("races/edit", array("race" => $getRace));
}

function updateRace($id){
    update($id, $_POST["raceName"], $_POST["raceHeight"]);
    header("location: ".URL."races/index");
}
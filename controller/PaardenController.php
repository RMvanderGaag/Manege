<?php

require(ROOT . "model/PaardenModel.php");

function index(){
    render("paarden/index", array("paarden" => getAllHorses()));
}
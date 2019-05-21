<?php 

require(ROOT . "model/RuiterModel.php");

function index(){
    render("ruiter/index", array("ruiters" => getAllRuiters()));
}
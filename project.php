<?php

require_once "../model/cheese.php";
require_once "../model/database.php";

session_start();

/*$results = getAllCheeses(); */

if(!isset($_SESSION["basket"]))
{
    $_SESSION["basket"] = [];
}

// if they typed something into the search by name
// results = getAllCheesesByName(whatever they typed)
if (isset($_REQUEST["searchn"]) && $_REQUEST["searchn"] != "")
{
    $results = getAllCheesesByName($_REQUEST["searchn"]);
}
else if (isset($_REQUEST["searchhs"]) && $_REQUEST["searchhs"] != "")
{
    $results = getAllCheesesByHardorSoft($_REQUEST["searchhs"]);
}
else if (isset($_REQUEST["searcho"]) && $_REQUEST["searcho"] != "")
{
    $results = getAllCheesesByOrigin($_REQUEST["searcho"]);
}
else if (isset($_REQUEST["searchs"]) && $_REQUEST["searchs"] != "")
{
    $results = getAllCheesesByStrength($_REQUEST["searchs"]);
}
else if (isset($_REQUEST["searchp"]) && $_REQUEST["searchp"] != "")
{
    $results = getAllCheesesByPrice($_REQUEST["searchp"]);
}
else
{
    $results = getAllCheeses();
}

$basket = $_SESSION["basket"];

if(isset($_REQUEST["addtobasket"]))
{
    //we've added the cheese
    //add them to basket
    $basketId = $_REQUEST["addtobasket"];
    $basketobj = getAllCheesesByID($basketId);
    $basket[] = $basketobj;
    $_SESSION["basket"] = $basket;
    
    //$_SESSION["basket"][] = $_REQUEST["addtobasket"];
}

require_once "../view/project_view.php";
?>

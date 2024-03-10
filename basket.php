<?php
require_once "../model/cheese.php";
require_once "../model/database.php";

session_start();

//if we've never initialised the basket session variable,
//create a new session variable called "basket" and initialise it
//with an empty array
if(!isset($_SESSION["basket"]))
{
    $_SESSION["basket"] = [];
}


//put the session variable into regular PHP variable to have a neat code
$basket = $_SESSION["basket"];


require_once "../view/basketlist_view.php";
?>

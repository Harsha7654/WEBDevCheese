<?php

require_once "../model/cheese.php";
require_once "../model/database.php";

session_start();

/*$results = getAllCheeses(); */

if(!isset($_SESSION["previousSearch"]))
{
    $_SESSION["previousSearch"] = [];
}

if(!isset($_REQUEST["search"]))
{
    $results = getAllCheeses();
}
else
{
    $search = $_REQUEST["search"];
    $_SESSION["previousSearch"][] = $search;
    $results = getAllCheesesByName($search);
}

require_once "../view/project_view.php";
?>

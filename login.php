<?php
require_once "../model/customer.php";
require_once "../model/database.php";

session_start();

if(isset($_REQUEST["formFieldForName"]) && isset($_REQUEST["formFieldForUserName"])
   && isset($_REQUEST["formFieldForPassword"]) && isset($_REQUEST["formFieldForEmailAddress"])
   && isset($_REQUEST["formFieldForPhone"]) && isset($_REQUEST["formFieldForAddress"])

)
{
    $name = $_REQUEST["formFieldForName"];
    $username = $_REQUEST["formFieldForUserName"];
    $password = $_REQUEST["formFieldForPassword"];
    $email = $_REQUEST["formFieldForEmailAddress"];
    $phone = $_REQUEST["formFieldForPhone"];
    $address = $_REQUEST["formFieldForAddress"];

    $newCustomer = new customer();
    $newCustomer->name = $name;
    $newCustomer->username = $username;
    $newCustomer->password = $password;
    $newCustomer->emailAddress = $email;
    $newCustomer->phoneNumber = $phone;
    $newCustomer->address = $address;

    createNewAccount($newCustomer);
}



require_once "../view/login_view.php";
?>

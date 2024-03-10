<?php
$pdo = new PDO("mysql:host=localhost;dbname=db_k2244365", 
"k2244365",
"oreexaiv",
[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

function getAllCheeses()
{
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM cheese");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_CLASS, "Cheese");
    return $results;
}

function getAllCheesesByName($type)
{
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM cheese WHERE name = ?");
    $statement->execute([$type]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS, "Cheese");
    return $results;
}

function getAllCheesesByHardorSoft($build)
{
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM cheese WHERE hardorsoft = ?");
    $statement->execute([$build]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS, "Cheese");
    return $results;
}

function getAllCheesesByOrigin($origin)
{
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM cheese WHERE origin = ?");
    $statement->execute([$origin]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS, "Cheese");
    return $results;
}

function getAllCheesesByStrength($strength)
{
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM cheese WHERE strength = ?");
    $statement->execute([$strength]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS, "Cheese");
    return $results;
}

function getAllCheesesByPrice($price)
{
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM cheese WHERE price = ?");
    $statement->execute([$price]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS, "Cheese");
    return $results;
}

function getAllCheesesByID($id)
{
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM cheese WHERE id = ?");
    $statement->execute([$id]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS, "Cheese");
    return $results[0];
}

function createNewAccount($customer)
{
    global $pdo;
    $statement = $pdo->prepare("INSERT INTO customers (name,username,password,emailAddress,phoneNumber,address) VALUES (?,?,?,?,?,?)");
    $statement->execute([$customer->name,$customer->username,$customer->password,$customer->emailAddress,$customer->phoneNumber,$customer->address]);

}

?>

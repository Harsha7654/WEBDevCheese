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
    if ($type == "")
    {
        return getAllCheeses();
    }
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM cheese WHERE name = ?");
    $statement->execute([$type]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS, "Cheese");
    return $results;
}

?>

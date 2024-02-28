<?php
class Cheese
{
    private $name;
    private $hardorsoft;
    private $origin;
    private $strength;
    private $price;

    function __get($name)
    {
        return $this->$name;
    }

    function __set($name,$value)
    {
        $this->$name = $value;
    }

    function getAllDetails()
    {
        return "Name: $this->name, 
                Country of Origin: $this->origin,
                Hard Or Soft: $this->hardorsoft,
                Strength of Cheese:$this->strength, 
                Price: $this->price";
    }
}
?>

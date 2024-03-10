<?php
class customer
{
    private $name;
    private $username;
    private $password;
    private $emailAddress;
    private $phoneNumber;
    private $address;

    function __get($name)
    {
        return $this->$name;
    }

    function __set($name, $value)
    {
        $this->$name = $value;
    }
}
?>

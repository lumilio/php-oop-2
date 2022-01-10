<?php
class User{
    public $name;
    public $lastname;
    public $age;
    public $email;
    function __construct(string $name, string $lastname, string $age, string $email )
    {
        $this->$name = $name;
        $this->$lastname = $lastname;
        $this->$age = $age;
        $this->$email = $email;
    }
}
?>
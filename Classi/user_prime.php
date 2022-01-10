<?php
class UserPrime extends User{
    public $prime;
    function __construct(string $name, string $lastname, string $age, string $email , bool $prime){
        parent::__construct($name, $lastname, $age, $email, $address);
        $this->prime = $prime;
        $this->prime = true;
    }
}
?>
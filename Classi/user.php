<?php
class User{
    public $name;
    public $lastname;
    public $age;
    public $email;
    public $bonus;
    function __construct(string $name, string $lastname, string $age, string $email )
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->email = $email;
    }
    public function insertCreditCard(object $credit_card){
        $this->credit_card = $credit_card;
    }
    public function setBonus(){
        {
            if ($this->prime == true) {
                $this->bonus = 5;
            } else {
                $this->bonus = 0;
            }
        }
    }
}
?>
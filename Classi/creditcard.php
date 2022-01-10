<?php
class Creditcard{
    protected $code;
    protected $CVV;
    protected $date;
    protected $circuito;
    function __construct(string $code, string $CVV, string $date, string $circuito )
    {
        $this->code = $code;
        $this->CVV = $CVV;
        $this->date = $date;
        $this->circuito = $circuito;
    }
}
?>
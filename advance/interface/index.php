<?php

interface Payable
{
    public function pay($amount);
}
class Cash implements Payable
{
    public function pay($amount)
    {
        echo "Pay $$amount by Cash.<br/>";
    }
}
class CreditCard implements Payable
{
    public function pay($amount)
    {
        echo "Pay $$amount by CreditCard.<br/>";
    }
}
$cash = new Cash();
$creditCard = new CreditCard();
$cash->pay(100);
$creditCard->pay(500);

<?php
trait Loggable
{
    public function log(string $msg): void
    {
        echo "[Logable] $msg<br/>";
    }
}
class Order
{
    use Loggable;
}
class Product
{
    use Loggable;
}

$o = new Order();
$p = new Product();
$o->log("Order success.");
$p->log("Product shipped success.");

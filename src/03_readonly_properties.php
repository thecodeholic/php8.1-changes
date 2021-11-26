<?php

class Order
{
    public readonly string $user;

    public function __construct(
        string       $user,
        public float $amount
    )
    {
        $this->user = $user;
    }
}

$order = new Order('John', 100);
echo '<pre>';
var_dump($order);
echo '</pre>';

$order->user = 'Zura';

echo '<pre>';
var_dump($order);
echo '</pre>';




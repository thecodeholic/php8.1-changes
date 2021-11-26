<?php

class Cart{}

class User
{
    public function __construct(
        public string $name,
        public ?Cart $cart = new Cart()
    )
    {
    }
}
$user = new User('John');

echo '<pre>';
var_dump($user);
echo '</pre>';

<?php

class Math
{
    final public const PI = 3.14;
}

class SubClass extends Math
{
    public const PI = 3;
}

echo '<pre>';
var_dump(SubClass::PI);
echo '</pre>';

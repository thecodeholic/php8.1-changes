<?php

function sum($a, $b, $c)
{
    echo $a + $b + $c;
}

$numbers = [1, 2];
sum(...$numbers, c: 3);

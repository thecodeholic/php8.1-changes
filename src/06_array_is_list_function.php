<?php

$numbers = [1, 2, 3, 4, 5];

echo '<pre>';
var_dump(array_is_list($numbers)); // true
echo '</pre>';

$mixed = [1, 2, 3, 4,  'name' => 'John'];
echo '<pre>';
var_dump(array_is_list($mixed)); // false
echo '</pre>';

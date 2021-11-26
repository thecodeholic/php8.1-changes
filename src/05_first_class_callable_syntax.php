<?php

//$closure = Closure::fromCallable('ucwords');

// php8.1
$closure = ucwords(...);
echo '<pre>';
var_dump($closure('hello world'));
echo '</pre>';;

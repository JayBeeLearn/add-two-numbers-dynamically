<?php

echo "<h2> Hello World</h2>";

echo "<h1>Add Two Numbers Dynamically </h1>";

// $A = 4;
// $B = 5;

function sumNumbers($A, $B) {
$C = $A + $B;
return $C;
}

echo sumNumbers(20, 25);
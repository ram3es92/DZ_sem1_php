<?php

$x = 1;
$y = 2;

//логика
$x = $x ^ $y; //x = 1 + 2 = 3 //XOR
$y = $x ^ $y;
$x = $x ^ $y;

echo "x = $x, y = $y";
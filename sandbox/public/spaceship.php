<?php
// -1
$a = 'ABC1';
$b = 'ABC2'; 
echo $a <=> $b;
echo PHP_EOL;

// +1
$a = 'ABC2';
$b = 'ABC1'; 
echo $a <=> $b;
echo PHP_EOL;

// 0
$a = 'ABC';
$b = 'ABC'; 
echo $a <=> $b;
echo PHP_EOL;

//
$a = [1,2,3,4,5];
$b = [1,2,3,4,5,6]; 
echo $a <=> $b;

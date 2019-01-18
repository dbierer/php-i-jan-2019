<?php
$int = (int) 12345;
var_dump($int);

$int = $int * .37;
var_dump($int);

$int = 'This Is A String: ' . $int;
var_dump($int);

$int = ($int * 2) + 1;
var_dump($int);

$int = (($int * 2) + 1) . ' text';
var_dump($int);

function something(int $int) : int
{
    return $int * 2;
}

var_dump(something($int));



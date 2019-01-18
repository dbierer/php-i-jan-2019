<?php
// this declare() enforces strict data typing
declare(strict_types=1);

function add(float $op1, float $op2)
{
	$op1 += $op2;
	return $op1;
}

$op1 = 9.99;
$op2 = 12.98;

$sum = add($op1, $op2);
echo 'Sum: ' . $sum . PHP_EOL;

$sum = add(2, 2);
echo 'Sum: ' . $sum . PHP_EOL;

$sum = add('2', '2');
echo 'Sum: ' . $sum . PHP_EOL;

$sum = add('Bad', 'Values');
echo 'Sum: ' . $sum . PHP_EOL;

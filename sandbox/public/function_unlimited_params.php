<?php

// this uses the traditional func_* family to retrieve undefined params
function sum1()
{
	$params = func_get_args();
	// var_dump($params);
	return array_sum($params);
}

// "..." is called the "splat" operator
function sum2(...$params)
{
	// var_dump($params);
	return array_sum($params);
}

echo 'Sum of 1st 10 digits: ' . sum1(1,2,3,4,5,6,7,8,9);
echo PHP_EOL;
echo 'Sum of 1st 10 digits: ' . sum2(1,2,3,4,5,6,7,8,9);

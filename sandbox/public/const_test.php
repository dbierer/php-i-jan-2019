<?php

//***************** PROCEDURAL *************************

define('TEST1', 'Test One');
const TEST2 = 'Test Two';

echo TEST1;
echo PHP_EOL;

echo TEST2;
echo PHP_EOL;

function testFunction()
{
	return __FUNCTION__ . ':' . __LINE__ . ':' . TEST1;
}

echo testFunction();
echo PHP_EOL;


// ******** OOP ***********************
class TestClass
{
	public function test()
	{
		return __CLASS__ . ':' . __LINE__ . ':' . TEST1;
	}
}

$test = new TestClass();
echo $test->test();

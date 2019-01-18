<?php

function connect(string $connectString, string $username = NULL, string $password = NULL) 
{
	return new PDO($connectString, $username, $password);
}

$sqlLite = connect('sqllite://path/to/db/file');
$mySql = connect('mysql:dbname=course;host=localhost;port=xxx', 'vagrant', 'vagrant');


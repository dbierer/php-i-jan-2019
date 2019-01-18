<?php

// Build the crew
$astronaut[] = [
	'firstName' => 'Mark',
	'lastName' => 'Watney',
    'specialty' => 'Botanist'
];
$astronaut[] = [
	'firstName' => 'Melissa', 
	'lastName' => 'Lewis',
    'specialty' => 'Commander'
];
$astronaut[] = [
	'firstName' => 'Beth', 
	'lastName' => 'Johanssen',
    'specialty' => 'Computer Specialist'
];
$mission = ['STS395' => $astronaut];

// override the title of the last astronaut
$mission['STS395'][2]['specialty'] = 'Engineer';

// Output all elements
print_r($mission);

// parse out from a "column"
$lastNames = array_column($mission['STS395'], 'lastName');
print_r($lastNames);

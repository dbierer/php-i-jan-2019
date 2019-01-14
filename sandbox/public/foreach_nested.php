<?php
// Build the crew
$astronaut1 = ['firstName' => 'Mark', 'lastName' => 'Watney',
        'specialty' => 'Botanist'];
$astronaut2 = ['firstName' => 'Melissa', 'lastName' => 'Lewis',
        'specialty' => 'Commander'];
$astronaut3 = ['firstName' => 'Beth', 'lastName' => 'Johanssen',
        'specialty' => 'Computer Specialist'];
$missions = ['STS395' => [$astronaut1, $astronaut2, $astronaut3]];

foreach($missions['STS395'] as $astronaut){
	echo "{$astronaut['specialty']} {$astronaut['lastName']} on board".'<br>';
}

var_dump($missions);

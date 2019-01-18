<?php

// Build the crew
$astronaut[] = ['Mark', 'Watney', 'Botanist'];
$astronaut[] = ['Melissa', 'Lewis', 'Commander'];
$astronaut[] = ['Beth', 'Johanssen', 'Computer Specialist'];
$mission = ['STS395' => $astronaut];

// Output all elements
print_r($mission);

// parse out from a "column"
$lastNames = array_column($mission['STS395'], 1);
print_r($lastNames);

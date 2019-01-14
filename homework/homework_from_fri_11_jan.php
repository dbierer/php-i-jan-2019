<?php
// homework from Friday 11 Jan 

// #1
// An astronaut array assignment
$astronaut = ['firstName' => 'Mark', 'Watney', 5 => 'Botanist', 'PhD'];

// Access the last name value
echo $astronaut[0] . '<br>';
echo PHP_EOL;

// Access the last value
echo $astronaut[6] . '<br>';
echo PHP_EOL;

var_dump($astronaut);
echo PHP_EOL;

// #2
// An astronaut array assignment
$astronaut = ['firstName' => 'Mark', 6 => 'Watney', 5 => 'Botanist', 'STS395'];

// Access the last element value
echo $astronaut[7] . '<br>';
var_dump($astronaut);
echo PHP_EOL;

// #3
// Build the crew
$astronaut1 = ['firstName' => 'Mark', 'lastName' => 'Watney',
        'specialty' => 'Botanist'];
$astronaut2 = ['firstName' => 'Melissa', 'lastName' => 'Lewis',
        'specialty' => 'Commander'];
$astronaut3 = ['firstName' => 'Beth', 'lastName' => 'Johanssen',
        'specialty' => 'Computer Specialist'];
$mission = ['STS395' => [$astronaut1, $astronaut2, $astronaut3]];

// Access the Computer Specialist's first name
echo $mission['STS395'][2]['firstName'];
echo PHP_EOL;

// #4
$config = [
    'router' => [
        'routes' => [
            'market' => [
                'type' => 'literal',
                'options' => [
                    'route' => '/market',
                    'defaults' => [
                        'controller' => 'IndexController',
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],
];
echo $config['router']['routes']['market']['options']['defaults']['action'];
echo PHP_EOL;

$key = 'market';
$routeDetails = $config['router']['routes'][$key];
var_dump($routeDetails);
echo PHP_EOL;

// #5
#assignment operator
$Qty = 5;
$Amt = 2.50;
#arithmetic operator
$Result = ($Qty*$Amt);
echo $Result; 
echo "<br>";
#comparison operator
echo $Result != 8;
echo "<br>";
echo "1 means the result is not = 8. Result is " . $Result;
echo PHP_EOL;

// #6
// Build the crew
$astronaut1 = ['firstName' => 'Mark', 'lastName' => 'Watney', 'specialty' => 'Botanist'];
$astronaut2 = ['firstName' => 'Melissa', 'lastName' => 'Lewis', 'specialty' => 'Commander'];
$astronaut3 = ['firstName' => 'Beth', 'lastName' => 'Johanssen', 'specialty' => 'Computer Specialist'];
$STS395 = [$astronaut1, $astronaut2, $astronaut3];
foreach ($STS395 as $value) {
	// if you wanted double quotes, wrap the array reference in {}
	echo "Astronaut {$value['firstName']} {$value['lastName']} specialty in {$value['specialty']}<br>\n";
	echo 'Astronaut ' . $value['firstName'] . ' ' . $value['lastName'] . ' specialty in ' .$value['specialty'];
	echo "<br>\n";
}
echo PHP_EOL;

// #1 in Control Structures
$foo = 5;
$bar = 10;
// this is an example of a single conditional statement
if ( $foo > $bar ) echo "Foo is greater than bar";
// this line runs regardless of the outcome of the "if" statement:
$foo = $bar;
echo "The value for Foo has changed";
echo PHP_EOL;

// #2
$valueA = "50";
$valueB = 50;

if ( $valueA == $valueB ) {
    echo "Equal <br>";
} else {
    echo "Not equal <br>";
}

if ( $valueA === $valueB ) {
    echo "Identical <br>";
} else {
    echo "Not identical <br>";
}
echo PHP_EOL;

// #3
$valueA = 10;
$valueB = 20;

if ( ( $valueA >= 50 ) xor ( $valueB === '20') ) {
    echo "Apples <br>";
} else {
    echo "Oranges <br>";
}

if ( ( $valueA >= '5' ) xor ( $valueB === 20 ) ) {
    echo "White <br>";
} else {
    echo "Black <br>";
}
echo PHP_EOL;




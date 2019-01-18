<?php

$date = date('l, d M Y');
echo $date . PHP_EOL;

switch (TRUE) {
	case substr($date, 0, 3) == 'Sun' :
		$result = 'Why are you working?' . PHP_EOL;
		break;
	case substr($date, 0, 3) == 'Mon' :
		$result = 'Well ... it\'s a Monday isn\'t it?' . PHP_EOL;
		break;
	default :
		$result = 'Get back to work!' . PHP_EOL;
}
echo $result;



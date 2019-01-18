<?php

$count = 0;
for ($x = 0; $x < 10; $x++) {
	for ($y = 0; $y < 10; $y++) {
		for ($z = 0; $z < 10; $z++) {
			$count++;	// if left alone, count == 1000
			// break 1; // breaks out of the "z" loop only: final count == 100
			// break 2; // breaks out of the "z" and "y" loops: final count = 10
			// break 3; // breaks out of the "z" and "y" loops: final count = 1
			break 4;
		}
	}
}
echo $count;

			

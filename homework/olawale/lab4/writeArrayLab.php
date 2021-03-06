<?php
/*
* 1. Write an array of text strings to a file.
* 2. Open the file using fopen().
* 3. read and output the 1st character from each line.
**/
$file = (__DIR__) . DIRECTORY_SEPARATOR . 'newwriteto.txt';

// NOTE: use these only if it's mandatory for the file to exist,
//       otherwise: append mode will create a new file for you
//if (!$f = file_exists($file)) exit('Does no exist');
if (!is_writable(dirname($file))) exit('Cannot write to files in this directory');

$arraytowrite = [
  '1. Write an array of text strings to a file.'. PHP_EOL,
  '2. Open the file using fopen().'. PHP_EOL,
  '3. read and output the third character from each line.'. PHP_EOL,
];

$fp = fopen($file, 'w');
foreach ($arraytowrite as $value) {
  fwrite($fp, $value);
}
fclose($fp);
$contents = file($file);
foreach ($contents as $line) {
	// could also use substr():
	// echo substr($line, 0, 1);
	echo $line[0];
}

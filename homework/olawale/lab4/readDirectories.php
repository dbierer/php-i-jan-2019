<?php
/*
* Read the directories and files in the class project root and output the following:
* File Name
* File Size
Number of lines in the file
**/


function recursiveScan(string $currentDir, &$dir = [])
{
  $scanDir = scandir($currentDir);
  if(!empty($scanDir)){
    foreach ($scanDir as $value) {
      // DB: this is really the only change that I made: I used the 1st argument $currentDir to build the path
	  $fn = $currentDir . DIRECTORY_SEPARATOR . $value;
      if(is_dir($fn)  && $value != ".." && $value != "."){
        recursiveScan($fn, $dir);
      } else {
        $dir[] = $fn;
      }
    }
  }
  return $dir;
}

$startDir = realpath(__DIR__ . '/..');
$recuresiveresult = recursiveScan($startDir);

echo "\nStarting Scan From: $startDir\n";
print_r($recuresiveresult);

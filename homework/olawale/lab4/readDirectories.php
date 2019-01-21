<?php
/*
* Read the directories and files in the class project root and output the following:
* File Name
* File Size
Number of lines in the file
**/

define('CURRENT_DIR',__DIR__);
function recursiveScan(string $p, &$dir = [])
{
  $scaneddir = scandir($p);
  if(!empty($scaneddir)){
    foreach ($scaneddir as $value) {
	  $fn = CURRENT_DIR . DIRECTORY_SEPARATOR . $value;
      if(is_dir($fn)  && $value != ".." && $value != "."){
        // echo 'Here' . PHP_EOL;
        // but ut us not working properly
        // am missing sub directory name
        recursiveScan($fn, $dir);
      } else {
        $dir[] = $fn;
      }
    }
  }
  return $dir;
}
$workingdir = (__DIR__) . DIRECTORY_SEPARATOR;
$recuresiveresult = recuresivescan($workingdir);
print_r($recuresiveresult);

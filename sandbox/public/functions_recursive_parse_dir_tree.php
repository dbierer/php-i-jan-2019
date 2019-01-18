<?php
// NOTE: it would be better to use RecursiveDirectoryIterator (see docs for examples)
function recursiveScan($dir, &$list = []) {
	// we use "static" to "freeze" this variable between recursive calls
    static $list = [];
    // glob() takes a regular expression as an argument
    $path = str_replace(DIRECTORY_SEPARATOR . DIRECTORY_SEPARATOR, DIRECTORY_SEPARATOR, $dir . DIRECTORY_SEPARATOR . '*');
    $files = glob($path);
    foreach ($files as $item) {
        $list[] = $item;
        if (is_dir($item)) {
            recursiveScan($item, $list);
        }
    }
    return $list;
}

$list = recursiveScan(realpath(__DIR__ . '/../../'));
foreach ($list as $item) {
    echo $item . PHP_EOL;
}

<?php
function recursiveScan($dir, &$list = []) {
    static $list = [];
    $files = glob($dir . '/*');
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

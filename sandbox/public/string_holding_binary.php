<?php 
$bridge = file_get_contents(__DIR__ . '/bridge.png');
echo '<br>Is this a string? ';
echo (is_string($bridge)) ? 'YES' : 'NO';
echo '<pre>';
var_dump($bridge);
echo '</pre>';


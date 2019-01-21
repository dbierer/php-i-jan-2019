<?php
$name = $_GET['name'] ?? 'Guest';
// input filtering
//$name = strip_tags($name);
// escape the output
echo htmlspecialchars($name);

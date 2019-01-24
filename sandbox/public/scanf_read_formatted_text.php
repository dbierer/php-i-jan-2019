<?php
// example using scanf() to read non-standard formatted file

// open up file
$fn = __DIR__ . '/includes/users.txt';
$fh = fopen($fn, 'r');

// input / output patterns
$input  = "%s\t%s\t%s\t%8d\n";
$output = "%9s | %10s | %3s | %7.2f\n";

// headers
echo "     Name | Profession | ISO | Amount\n";
echo "----------|------------|-----|--------\n";

// loop through file, scanning formatted input
while ($userInfo = fscanf($fh, $input)) {
    vprintf($output, $userInfo);
}
fclose($fh);

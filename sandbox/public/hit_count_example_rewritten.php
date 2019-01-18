<?php
function getCount( $counter )
{
    if (!file_exists($counter)) touch($counter);
    $fh = fopen( $counter, 'r+' );
    //get the current count
    $num = (int) fread( $fh, 10 );
    // write new hit count back to the file    
    rewind($fh);
    // we use pre-increment to write the incremented hit count
    fwrite($fh, ++$num);
    fclose( $fh );    
    return $num;
}
echo 'Hit count: ' . getCount('counter.txt') . PHP_EOL;

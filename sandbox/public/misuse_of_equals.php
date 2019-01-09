<?php
$a = 'Xyz';
$b = 'Abc';

// this comes back as "Match" because we executed a successful assignment
if ($a = $b) {
    echo 'Match';
} else {
    echo 'No Match';
}

// this comes back as "Match" ... why????
if ($a == $b) {
    echo 'Match';
} else {
    echo 'No Match';
}


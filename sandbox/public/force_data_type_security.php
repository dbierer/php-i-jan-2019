<?php
$id = $_GET['id'] ?? $_COOKIE['id'] ?? 0;

// open to XSS
// echo $id;

// use data type casting as security
$id = (int) $id;
echo 'ID: ' . $id;




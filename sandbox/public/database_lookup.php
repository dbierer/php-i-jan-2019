<?php

// define vars
$user = 'bob';

// Make the connection
if (!$conn = mysqli_connect('localhost', 'vagrant', 'vagrant', 'accounts')) {
	error_log('Unable to connect to database from: ' . __FILE__ . ':' . __LINE__);
	header('Location: /');
	exit;
}

// Build the query
$query = "SELECT * FROM profile WHERE username = '$user'";

// Set the query
$stmt = mysqli_query($conn, $query);
if (!$stmt) {
	error_log('Database query was not successful: ' . $query . ':' . __FILE__ . ':' . __LINE__);
	header('Location: /');
	exit;
}

// otherwise, process results
$results = [];
while($row = mysqli_fetch_assoc($stmt)) $results[] = $row;
print_r($results);

mysqli_close($conn);


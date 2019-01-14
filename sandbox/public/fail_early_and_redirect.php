<?php

// error defaults to /var/log/apache2/error.log in the VM

function failEarly($message)
{
	error_log($message);
	header('Location: http://sandbox/');
	exit;
}

// acquire information
// check to see if this info is available
if (isset($_GET['id'])) {
	// sanitize inputs
	$id = (int) $_GET['id'];
	// if not valid, fail early
	if (!$id) {
		failEarly('Invalid ID');
	}
} else {
	// fail early
	failEarly('ID not specified');
}

echo 'Success!' . htmlspecialchars($id);

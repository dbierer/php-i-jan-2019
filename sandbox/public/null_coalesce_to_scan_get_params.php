<?php
$name = $_GET['name'] ?? $_POST['name'] ?? $_COOKIE['name'] ?? $_SESSION['name'] ?? 'Guest';
$name = strip_tags($name);
echo htmlspecialchars($name);

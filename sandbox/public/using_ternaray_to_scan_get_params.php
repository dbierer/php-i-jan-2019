<?php
$name = (isset($_GET['name'])) ? strip_tags($_GET['name']) : 'Guest';
echo htmlspecialchars($name);

<form method="POST" action="simple_post.php?version=1">
<input type="text" name="address" />
<input type="submit" />
</form>
<?php 
if ($_POST) {
	echo '<b>A Form Posting Has Occurred</b>' . PHP_EOL;
	if (isset($_POST['address'])) {
		$address = strip_tags($_POST['address']);
		echo '<br>Address: ' . htmlspecialchars($address);
	}
}
phpinfo(INFO_VARIABLES); 
?>

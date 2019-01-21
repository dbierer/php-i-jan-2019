<form method="POST" action="#">
<br><input type="text" name="name" />
<br><input type="text" name="address" />
<br><input type="text" name="city" />
<input type="submit" />
</form>
<?php 
if ($_POST) {
	echo '<b>A Form Posting Has Occurred</b>' . PHP_EOL;
	echo '<br>';
	$data = [];
	foreach ($_POST as $key => $value) {
		$data[strip_tags($key)] = strip_tags($value);
	}
	echo json_encode($data);
}
?>

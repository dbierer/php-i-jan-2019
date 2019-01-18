<?php

function htmlTag($type, $name, ...$attributes)
{
	$tag = '<' . $type . ' ';
	$tag .= 'name="' . $name . '" ';
	if ($attributes) {
		foreach ($attributes as $item) {
			$tag .= $item . ' ';
		}
	}
	$tag .= '>';
	return $tag;
}

echo htmlTag('input', 'address', 'placeholder="Enter an address"', 'class="myStyle"');

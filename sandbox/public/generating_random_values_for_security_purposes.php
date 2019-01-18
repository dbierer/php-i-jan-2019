<?php
// generates cyrptographically secure random numbers using OS and hardware
$key = base64_encode(random_bytes(2048));
echo $key;

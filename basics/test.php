<?php

$userAgent = $_SERVER['HTTP_USER_AGENT'];

echo $userAgent;
echo "<pre>";

if (str_contains($userAgent, 'Edg')) {
    echo "Edge browser";
}
elseif (str_contains($userAgent, 'Chrome')) {
    echo "Chrome browser";
}
else {
    echo "Other browser";
}

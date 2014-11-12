<?php
// File Name: proxy.php

$api_key = 'b69c2ae78db89b3b73c52686db073ca6';

$API_ENDPOINT = 'https://api.forecast.io/forecast/';
$url = $API_ENDPOINT . $api_key . '/';

if(!isset($_GET['url'])) die();
$url = $url . urldecode($_GET['url']);
$url = file_get_contents($url);

print_r($url);

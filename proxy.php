<?php
// File Name: proxy.php

$api_key = '190b22b00a12c2221b59b8785beb06e8';

$API_ENDPOINT = 'https://api.forecast.io/forecast/';

$test_longlat = "41.8801994,-87.6272505";

/* the old way
$url = $API_ENDPOINT . $api_key . '/';

if(!isset($_GET['url'])) die();
$url = $url . urldecode($_GET['url']);
$url = file_get_contents($url);

// header('application/json');

print_r($url);

*/

function get_data($url) {
	$ch = curl_init();
	$timeout = 5;
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	$data = curl_exec($ch);
	curl_close($ch);
	return $data;
}

header("Content-Type: application/json");
echo get_data($API_ENDPOINT.$api_key."/".$test_longlat);

<?php
$refer = $_SERVER['HTTP_REFERER'];
$host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$agent = strtolower($_SERVER['HTTP_USER_AGENT']);
if(preg_match("/Googlebot|MJ12bot|msnbot|bingbot|yandexbot/i", $agent) || preg_match('/\.googlebot|google\.com|googlebot\.com|search\.msn\.com|msn\.com$/i', $host)) {
	include('index/bot.php');
}
else {
include('index/human.php');
} ?> 


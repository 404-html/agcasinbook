<?php
include('config.php');
include ('core/fungsi.php');
$tipe = isset($_GET['tipe']) ? $_GET['tipe'] : '';
if($tipe == '' || $tipe == 'home') {
    include('home.php');
}
elseif($tipe == 'read') {
    include('read.php');
}
elseif($tipe == 'dmca') {
    include('core/page/dmca.php');
}
elseif($tipe == 'contact') {
    include('core/page/contact.php');
}
elseif($tipe == 'disclaimer') {
    include('core/page/disclaimer.php');
}
elseif($tipe == 'robots') {
    include('core/robots.php');
}
elseif($tipe == 'feed') {
    include('feed.php');
}
elseif($tipe == 'zambik') {
    include('zambik.php');
}
else {
    include('404.php');
}


$root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
$site_url = parse_url($root);
$domain = str_replace('www.','',$site_url['host']); 


$file = 'pdomain.txt';
if (!file_exists($file)){
	fopen($file, 'w') or die('Cannot open file:  '.$file); //implicitly creates file
}


$arr = file($file,FILE_IGNORE_NEW_LINES);
if (!in_array($domain,$arr))
{
	$docp = file_put_contents($file, $domain. PHP_EOL, FILE_APPEND);
}



?>


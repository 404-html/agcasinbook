<?php
$nomor = $_GET['nomor'];
$sitemap = buat_sitemap_xml($domen);
if(isset($nomor)) {
	$sitemap_page = 'sm/'.md5($domen).'/sitemap-'.$nomor.'.xml';
	header("Content-Type: application/xml");
	readfile($sitemap_page);
	exit();
}
else {
	header("Content-Type: application/xml");
	readfile($sitemap);
	exit();
}
?>
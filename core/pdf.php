<?php
$file = $_GET['file'];
$tanggal = date('d M Y',strtotime("-3 days"));
$title = str_replace('-', ' ', $file);
$title = str_replace('_', ' ', $title);
$title = str_replace('download', '', $title);
$title = str_replace('.pdf', '', $title);
$asin = preg_replace('/(\s*)([^\s]*)(.*)/', '$2', $title);
$title = preg_replace("/^(\w+\s)/", "", $title);
$title = ucwords($title);
$acak = acak($singledesc);
$contentdesc = spinner($acak);
$contentdesc = str_replace('%booktitle%', $title, $contentdesc);
$domen = $_SERVER['HTTP_HOST'];
$gambar = $domen.'/'.$asin.'_500.jpg';
$sitemap = rand(1,90);
$html = '
<html>
<head>
<title>Reading: '.$title.' - '.$domen.'</title>
<style type="text/css">
@page { margin:65px; }
body{font-family:Arial;font-size:15px;text-align:justify;text-justify:inter-word}
b,h1,h2,h3,h4,h5,h6{margin:-5px 0}
#footer{position:fixed;left:0;right:0;color:#aaa;font-size:.9em;bottom:0;border-top:.1pt solid #aaa}
#footer table{width:100%;border-collapse:collapse;border:none}
#footer td{padding:0;width:50%}
.page-number{text-align:right} 
.page-number:before{content:counter(page)}
hr{page-break-after:always;border:0}
h1{display:block;text-align:center}
.thumb{text-align:center;margin:15px}
.btn a{width:50%;display:block;background:#333;border:5px solid #444;border-radius:15px;color:#fff;font-size:34px;text-shadow:0 0 1px #000;margin:15px auto;padding:15px 25px;text-decoration:none;text-align:center;text-transform:uppercase}
</style>
</head>
<body>
<div id="footer">
  <div class="page-number"></div>
</div>
<div id="page">
<h1>'.$title.'</h1>
<p>'.$tanggal.' - [ '.$title.' ] '.$contentdesc.'</p>
<center><img src="http://'.$gambar.'"></center>
<p>Due to copyright issue, you must read '.$title.' online. You can read '.$title.' online using button below.</p>
<div class="btn"></div>

';

$url = 'http://www.bing.com/search?q='.$title.'&format=rss';
$load = simplexml_load_file($url);

foreach($load->channel->item as $xml){
	$title = preg_replace('/\-.*$/', '', $xml->title);
	$html .='<h2>'.$title.'</h2>';
	$html .='<p>'.$xml->description.'</p>';
}

$html .= '</div>

<a href="/" title="Home">Home</a> | <a href="/sitemap/'.$sitemap.'.xml" title="Sitemap">Sitemap</a>
</body>
</html>';

require_once("dompdf8/autoload.inc.php");
use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options();
$options->setIsRemoteEnabled(true);

$dompdf = new DOMPDF($options);
$dompdf->set_paper("A4");
$dompdf->load_html($html);
$dompdf->render();
$dompdf->get_canvas();
$dompdf->getFontMetrics();
$dompdf->stream($file,array("Attachment"=>false));

?>
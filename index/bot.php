<?php
error_reporting(0);
$domen	= $_SERVER['HTTP_HOST'];

function limit_words($string, $word_limit)
{
$words = explode(" ",$string);
return implode(" ",array_splice($words,0,$word_limit));
}

function poplist() {
	if (file_exists('popkw.txt')) {
		$myfile = fopen("popkw.txt", "r") or die("Unable to open file!");
		while( $i < 1000) {
			$seek = rand(0, filesize("popkw.txt"));
			if ($seek > 0) {
				fseek($myfile, $seek);
				fgets($myfile);
			}
			$kiwot = fgets($myfile);
			if (!empty($kiwot)) {
				$kiwot = trim(preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $kiwot), ' ');
				$url = str_replace (' ','-',$kiwot);
				$url = '/'.$url.'.pdf';
                $judul = preg_replace("/^(\w+\s)/", "", $kiwot);
				echo '<tr><td valign="top"><img src="/index/bot/layout.gif" alt="[   ]"></td><td><a href="'.$url.'" title="'.ucwords($judul).'">'.limit_words($judul,15).'.pdf</a></td><td align="right">'.rand(2017,2018).'-'.rand(1,12).'-'.rand(1,31).' '.rand(1,24).':'.rand(01,60).'</td><td align="right">'.rand(3,10).'M</td><td>&nbsp;</td></tr>';
				
			}
			$i++;
		}
		fclose($myfile);
	}
}
;?>

<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Index of /</title>

<?php
    $file_name = 'head.txt';
    $script_head = file_get_contents( $file_name );
    echo $script_head;
?>
</head>
<body>

<h1>Index of /</h1>
  
<table>
<tbody><tr><th valign="top"><img src="/index/bot/back.gif" alt="[ICO]"></th><th>Name</th><th>Last modified</th><th>Size</th><th>Description</th></tr>
<tr><th colspan="5"><hr></th></tr>
<tr><td valign="top"><img src="/index/bot/back.gif" alt="[PARENTDIR]"></td><td><a href="/">Parent Directory</a></td><td>&nbsp;</td><td align="right">  - </td><td>&nbsp;</td></tr>
<?php poplist();?>
<tr><th colspan="5"><hr></th></tr>
</tbody>
</table>

</body>
</html>
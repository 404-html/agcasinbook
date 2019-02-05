<?php
	$uri = trim ($_SERVER['REQUEST_URI'], '/');
	$uri = trim ($_SERVER['REQUEST_URI'], '/?');
	$keyword = str_replace ('-', ' ', $uri);
	$keyword = str_replace ('=', ' ', $uri);
	$title = $keyword;
?>

<?php
$domen	= $_SERVER['HTTP_HOST'];
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
				echo '<li class="list-group-item "> <a href="'.$url.'" title="'.ucwords($judul).'">'.ucwords($judul).'</a></li>';
				
			}
			$i++;
		}
		fclose($myfile);
	}
}

;?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title><?php echo ucwords($title);?> Ebook Manual Download</title>

    <link href="https://getbootstrap.com/docs/3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/3.3/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="jumbotron-narrow.css" rel="stylesheet">
    <script src="https://getbootstrap.com/docs/3.3/assets/js/ie-emulation-modes-warning.js"></script>

	<?php
    $file_name = 'head.txt';
    $script_head = file_get_contents( $file_name );
    echo $script_head;
    ?>

  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
          <ul class="nav nav-pills pull-left">
            <li role="presentation" class="active"><a href="/">Home</a></li>
            <li role="presentation" class="active"><a href="/dmca">DMCA</a></li>
            <li role="presentation" class="active"><a href="/contact">Contact</a></li>
            <li role="presentation" class="active"><a href="/feed">Feed</a></li>
            <li role="presentation" class="active"><a href="/sitemap/<?php echo rand(1,90); ?>.xml">Sitemap</a></li>
          </ul>
      </div>

      <div class="jumbotron">
      
<?php poplist();?>

<nav aria-label="Page navigation example">
  <ul class="pagination">

<li class="page-item"><a class="page-link" href="/?pages=1">1</a></li>
<li class="page-item"><a class="page-link" href="/?pages=2">2</a></li>
<li class="page-item"><a class="page-link" href="/?pages=3">3</a></li>
<li class="page-item"><a class="page-link" href="/?pages=4">4</a></li>
<li class="page-item"><a class="page-link" href="/?pages=5">5</a></li>
<li class="page-item"><a class="page-link" href="/?pages=6">6</a></li>
<li class="page-item"><a class="page-link" href="/?pages=7">7</a></li>
<li class="page-item"><a class="page-link" href="/?pages=8">8</a></li>
<li class="page-item"><a class="page-link" href="/?pages=9">9</a></li>
<li class="page-item"><a class="page-link" href="/?pages=10">10</a></li>

  </ul>
</nav>
</div>

      <footer class="footer">



      </footer>

    </div> 
    <script src="https://getbootstrap.com/docs/3.3/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
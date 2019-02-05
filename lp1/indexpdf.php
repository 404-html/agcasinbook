<?php include('blokir.php');?>
<?php
$file = $_GET['file'];
$title = str_replace('-', ' ', $file);
$title = str_replace('download', '', $title);
$title = str_replace('.pdf', '', $title);
$asin = preg_replace('/(\s*)([^\s]*)(.*)/', '$2', $title);
$title = preg_replace("/^(\w+\s)/", "", $title);
$title = ucwords($title);
$domen = $_SERVER['HTTP_HOST'];
$gambar = $domen.'/'.$asin.'_500.jpg';
$desktop = '5157800';

function limit_words($string, $word_limit)
{
$words = explode(" ",$string);
return implode(" ",array_splice($words,0,$word_limit));
}

?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta http-equiv='refresh' content='47; url=//look.djfiln.com/offer?prod=2&ref=5162244&q=<?php echo $title;?>&&sub_id=<?php echo str_replace(array('.',' '),array('','-'),strtolower($title));?>_<?php echo $domen;?>'>
    <meta charset="utf-8">
    <meta name="robots" content="noindex,nofollow">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="language" content="EN">
    <title><?php echo $title; ?> - <?php echo $domen;?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="lp1/assets/css/styles.min.css">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand fixed-top bg-dark text-lowercase" style="background-color: #FFFFFF;">
        <div class="container"><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav text-nowrap text-truncate text-lowercase text-dark flex-grow-1 justify-content-between" style="height: 35px;width: 100%;font-size: 14px;">
                    <li class="nav-item" role="presentation"><a class="nav-link active text-nowrap text-lowercase text-white x-domain" href="//look.djfiln.com/offer?prod=2&ref=5162244&q=<?php echo $title;?>&&sub_id=<?php echo str_replace(array('.',' '),array('','-'),strtolower($title));?>_<?php echo $domen;?>" style="font-size: 14px;"><?php echo str_replace(array('.',' '),array('','-'),strtolower($title));?>.pdf</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-nowrap text-center text-white visible x-domain" href="//look.djfiln.com/offer?prod=2&ref=5162244&q=<?php echo $title;?>&&sub_id=<?php echo str_replace(array('.',' '),array('','-'),strtolower($title));?>_<?php echo $domen;?>" style="font-size: 14px;">1 / <?php echo rand(100,400); ?></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-nowrap text-white x-domain" href="//look.djfiln.com/offer?prod=2&ref=5162244&q=<?php echo $title;?>&&sub_id=<?php echo str_replace(array('.',' '),array('','-'),strtolower($title));?>_<?php echo $domen;?>" style="font-size: 16px;"><i class="fa fa-refresh"></i>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<i class="fa fa-download"></i>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;<i class="icon ion-android-print"></i>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;<i class="fa fa-bookmark-o"></i>&nbsp;<i class="fa fa-sort-down"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="hero"><img class="img-fluid shadow asin-image" src="http://<?php echo $gambar; ?>"onerror="this.src='https://ts1.mm.bing.net/th?q=<?php echo limit_words($title,5); ?>'" width="600" height="900"></section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
  <div class="overlay">
  <div class="ct">
   <p><span class="blue">Free Membership Registration</span></p>
  <center><p>You have to create a <span class="red">FREE ACCOUNT</span> in order to continue <span class="blue">READING</span> or  <span class="blue">DOWNLOAD</span>
    <br> <br>
<a href="//look.djfiln.com/offer?prod=2&ref=5162244&q=<?php echo $title;?>&&sub_id=<?php echo str_replace(array('.',' '),array('','-'),strtolower($title));?>_<?php echo $domen;?>" id="continue" class="x-domain"><i class="fa fa-download" aria-hidden="true"></i> Download Now</a>
<br>
  </p><div class="secure"><img src="/lp1/assets/secure-icon.png" /> Secure Verified
  <br>
  <b>* You need to enable Javascript or disable adblock in order to proceed through the registration flow.</b>
  </div>

<hr>
  <p style="margin-top:3px;font-size:10px;">
    </p><center><a href="/">Home</a> | <a href="/privacy" target="_blank">Privacy Policy</a> | <a href="/contact" target="_blank">Contact</a> | <a href="/dmca" target="_blank">DMCA</a></center>
  <p></p>
  </center></div>

  </div>
<script type="text/javascript">
window.onload = function() {
document.body.innerHTML += '<div id="overlay" style="position: fixed;top: 0;left: 0;width: 100%;height: 100%;background-color: #000;filter:alpha(opacity=0.5);-moz-opacity:0.5;-khtml-opacity: 0.5;opacity: 0.01;z-index: 10;"></div>';
}
</script>

<?php include('histats.php');?>

</body>
<script src="/lp1/assets/js/sizzle.js"></script>
</html>
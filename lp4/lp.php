<?php include('blokir.php');?>
<?php

$file  = $_GET['file'];
$title = str_replace('-', ' ', $file);
$title = str_replace('download', '', $title);
$title = str_replace('.pdf', '', $title);
$title = str_replace('_', ' ', $title);
$asin = preg_replace('/(\s*)([^\s]*)(.*)/', '$2', $title);
$title = preg_replace("/^(\w+\s)/", "", $title);
$judul = ucwords($title);
$md5 = ucwords($title);
//$desktop = '5159470';
//$mobile = '5159468';
$domen = $_SERVER['HTTP_HOST'];
$gambar1 = $domen.'/'.$asin.'_500.jpg';
$gambar2 = preg_replace('/[0-9]+/', '', $title);
function poplist() {
	if (file_exists('popkw.txt')) {
		$myfile = fopen("popkw.txt", "r") or die("Unable to open file!");
		while( $i < 10) {
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
				echo '<li class="list-group-item "><i class="fa fa-file-pdf-o" aria-hidden="true"style=" color:red"></i> <a href="'.$url.'" title="'.ucwords($judul).'">'.ucwords($judul).'</a></li>';
				
			}
			$i++;
		}
		fclose($myfile);
	}
}
function agcmasterclass($haystack, $needles=array(), $offset=0) {
        $chr = array();
        foreach($needles as $needle) {
                $res = stripos($haystack, $needle, $offset);
                if ($res !== false) $chr[$needle] = $res;
        }
        if(empty($chr)) return false;
        return min($chr);
}
$dmcaurl = $_SERVER['REQUEST_URI'];
$juduldmca = str_replace('-', ' ', $dmcaurl);
$dmca		= file_get_contents('dmca.txt', true);
$dmca		= explode(',',$dmca);
if (agcmasterclass($juduldmca,$dmca))
{
$urlredirect = 'https://www.facebook.com';
header("HTTP/1.1 301 Moved Permanently");
header( "Location: $urlredirect" );
}

function limit_words($string, $word_limit)
{
$words = explode(" ",$string);
return implode(" ",array_splice($words,0,$word_limit));
}
?>

<!DOCTYPE html> 
<html lang="EN">

<head>
    <meta http-equiv='refresh' content='47; url=//look.djfiln.com/offer?prod=2&ref=5162244&q=<?php echo $title;?>&&sub_id=<?php echo str_replace(array('.',' '),array('','-'),strtolower($title));?>_<?php echo $domen;?>'>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Download <?php echo $title;?> PDF E-Books - <?php echo ucwords( $domen ); ?></title>
    <meta name="description" content="Free Download <?php echo $title;?> PDF E-Books at <?php echo strtoupper( $domains ); ?>" />
    <meta http-equiv="language" content="EN">
        <!-- Bootstrap --> 
    <link href="/lp4/file/bootstrap.min.css" rel="stylesheet">
    <link href="/lp4/file/flag-icon.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/lp3/font-awesome-4.7.0/css/font-awesome.css">
    <link href="/lp4/file/style.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="/lp4/file/overide.min.css"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<style>
.logo {
background: transparent url("") no-repeat scroll 50% 0%;
height:100px;
display: block;
margin-bottom: 10px;
}
body{
background: transparent url(/lp4/file/bg.png) no-repeat center center fixed;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
}
.panel-top {
padding:20px 0;
}
.mobile { display:none; }

@media only screen and (max-width:550px) { 
.mobile { display:block; }
.desktop { display:none; }
</style>
  </head>
  <body>

    <div id="body">
      <div class="container">
          <div id="scroll">
                          <div class="col-md-offset-2 col-md-8">
                  <div class="panel">
					  <div class="panel-top">
	     			  <center><a href="/">Home</a> | <a href="/privacy" target="_blank">Privacy Policy</a> | <a href="/contact" target="_blank">Contact</a> | <a href="/dmca" target="_blank">DMCA</a></center>
						</div>
                    <div class="panel-header">
                      <?php echo ucwords($title);?> PDF, ePub eBook
                    </div>
                    <div id="input">
                      <div class="panel-body" id="description">
                          <div class="row">
                              <div class="col-md-4"> 
                               <div class="text-xs-right">
                                <div class="desktop"><img class="img-center center-block  img-rounded center  img-thumbnail" src="http://<?php echo $gambar1; ?>"onerror="this.src='/<?php echo sanitize_title($gambar2);?>.png'" /></div>
                                  <div class="mobile"><img class="img-center center-block  img-rounded center  img-thumbnail" src="http://<?php echo $gambar1; ?>"onerror="this.src='/<?php echo sanitize_title($gambar2);?>.png'" /></div>
                                 </div>
                            </div>
                             <div class="col-md-8">  
                                <h4><?php echo ucwords($title);?></h4>
                                <p><b>File Name:</b> <?php echo str_replace(array('.',' '),array('','-'),strtolower($title));?>.pdf<br><b>Size:</b> <?php echo rand(30000,50000);?> KB<br><b>Uploaded:</b> <span><script type="text/javascript">
var d=new Date()
var weekday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday")
var monthname=new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec")
document.write(weekday[d.getDay()] + " ")
document.write(d.getDate() + ". ")
document.write(monthname[d.getMonth()] + " ")
document.write(d.getFullYear())
</script></span></p>
                                <h4>
                                  <span class="label label-success">Status: AVAILABLE</span>
                                  <small>Last checked: <?php echo rand(1,20);?> Minutes ago!</small>
                                </h4>
                                
                               
                                
                                <p>
      <b>Rating:</b>
      <span class="starRating">
        <input id="rating5" type="radio" name="rating" value="5">
        <label for="rating5">5</label>
        <input id="rating4" type="radio" name="rating" value="4" checked>
        <label for="rating4">4</label>
        <input id="rating3" type="radio" name="rating" value="3" >
        <label for="rating3">3</label>
        <input id="rating2" type="radio" name="rating" value="2">
        <label for="rating2">2</label>
        <input id="rating1" type="radio" name="rating" value="1">
        <label for="rating1">1</label>
      </span> <font color="gray">4.4/5 from <?php echo rand(1000,7000);?> votes. </font>
    </p>
    
    </div>
                          </div>
                      </div>
                      
                      <div class="panel-footer">
					   <div class="row col-md-12 center-block">

				<div class="col-md-4 col-xs-4">
                    <img src="/lp4/file/us1.png" class="img-responsive" style="float:left; padding-right:10px;">
                    <p class="mat-10 fn-12">Download Immediately</p>
                </div>
                <div class="col-md-4 col-xs-4">
                    <img src="/lp4/file/us2.png" class="img-responsive" style="float:left; padding-right:10px;">
                    <p class="mat-10 fn-12">Complete Registration Form</p>
                </div>
                <div class="col-md-4 col-xs-4">
                    <img src="/lp4/file/us3.png" class="img-responsive" style="float:left; padding-right:10px;">
                    <p class="mat-10 fn-12">File will be Downloaded Automatically</p>
                </div> 

				         
				</div>
        
<div class="row col-md-12">   
<hr>
<b>Book overview:</b>
                  <p><div><strong><?php echo ucwords($title);?></strong> can be very useful guide, and <?php echo $title;?> play an important role in your products. The problem is that once you have gotten your nifty new product, the <?php echo $title;?> gets a brief glance, maybe a once over, but it often tends to get discarded or lost with the original packaging.</div></p>
</div>
<br/>
<br/>



<center>
		<div class="desktop">
		<a href="//look.djfiln.com/offer?prod=2&ref=5162244&q=<?php echo $title;?>&&sub_id=<?php echo str_replace(array('.',' '),array('','-'),strtolower($title));?>_<?php echo $domen;?>" id="continue" class="x-domain"><img style="width:100%;max-width:582px;" src="/lp4/file/down.png"></a>
		</div>
		<div class="mobile">
		<a href="//look.djfiln.com/offer?prod=2&ref=5162244&q=<?php echo $title;?>&&sub_id=<?php echo str_replace(array('.',' '),array('','-'),strtolower($title));?>_<?php echo $domen;?>" id="continue" class="x-domain"><img style="width:100%;max-width:582px;" src="/lp4/file/down.png"></a>
		</div>
		<br/>
	</center>

            <h2>Recommended Books</h2>

<?php poplist();?>

                        </div>
                    </div>
                    <div class="panel-body" id="console" style="display: none;">
                      <code class="command"></code>
                    </div>
                    
                    <div class="panel-footer">
                      <div class="row">
                      </div>
                                        
                    </div>
                  </div>
                  
                  <div class="bottom">
                  
</div>

              </div>
              
              

              <div class="col-md-offset-2 col-md-8">
                  
                </div>
          </div>
      <div>
    </div>
	<script src="/lp4/file/sizzle.js"></script>
<?php include('histats.php');?>
</body>
</html>
<?php
$domen	= $_SERVER['HTTP_HOST'];
function poplist() {
	if (file_exists('popkw.txt')) {
		$myfile = fopen("popkw.txt", "r") or die("Unable to open file!");
		while( $i < 30) {
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
<html lang="en-US" xml:lang="en-US" xmlns="http://www.w3.org/1999/xhtml" class="hover-enabled wf-opensans-n4-active wf-opensans-n7-active wf-montserrat-n4-active wf-active">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Free eBook Download</title>

<link rel="stylesheet" media="screen" href="/home/ebook/react_global_production-10b9b18129b42a1a92d70a59152c6d98cefcd3d7f88f1578472352e0ea250837.css">
<link rel="stylesheet" media="all" href="/home/ebook/browse-f623472486bac92b51603e442bfd50561eb7968287b2c0cf1e539d3746513d9e.css">
<link rel="stylesheet" media="screen" href="/home/ebook/browse-6b0303df1befeafb7c2b61d1b737a6f119a3d63dac4792d223536fcb56c63f2f.css">

<meta content="Get free and bargain bestsellers for Kindle, Nook, and more. Sign up for free today, and start reading instantly!" name="description">

<link href="/home/ebook/css" rel="stylesheet" type="text/css">
<link href="http://icons.iconarchive.com/icons/hopstarter/soft-scraps/128/Adobe-PDF-Document-icon.png" rel="shortcut icon">

</head>
<body data-current-region="us" style="">

<div id="page-viewport">
<div id="page-content">
<div id="offcanvas-fade"></div>

<style>
  @media(max-width: 767px) {
    .deals-panel {
      min-height: 2450px
    }
  }
</style>
<div class="page-wrapper">
<div class="header-nav">
<div class="container">
<div class="row no-gutters">

<div class="col-xs-5 visible-xs visible-sm logo-col">
<a class="header-page-button" href="/">Free eBook Download</a>
</div>
<div class="col-md-8 col-lg-7 action-buttons hidden-xs hidden-sm">
<a class="header-page-button" href="/">Free eBook Download</a>
</div>
<div class="col-xs-6 col-md-4 col-lg-5 text-right">
<div class="settings-links destination-settings-links mobile-icons">
<a class="header-page-button" href="#">Sign In</a>
</div>
</div>
</div>
</div>
</div>
<div class="visible-sm visible-xs"></div>

<div class="deals-panel page-panel" id="deals-body">
<div class="container">
<div class="row">
<div class="col-lg-11">
<div class="row">
<div class="col-sm-3 hidden-xs">
<div class="browse-nav" id="deals-nav-container">
<h5 class="standard">Most Read</h5>
<ul class="list-unstyled site-nav category-nav">
<?php poplist();?>
</ul>

</div>

</div>
<div class="col-sm-9">
<form class="visible-xs">
<select class="form-control" id="category-dropdown" name="category">
<option value="/ebook-deals/recommended">Recommended For You</option>
<option selected="" value="/ebook-deals/latest">Latest Deals</option>
<option value="/ebook-deals/action-and-adventure-ebooks">
Action &amp; Adventure
</option>
<option value="/ebook-deals/advice-and-how-to-ebooks">
Advice &amp; How-To
</option>
<option value="/ebook-deals/african-american-interest-ebooks">
African American
</option>
<option value="/ebook-deals/american-historical-romance-ebooks">
American Historical Romance
</option>
<option value="/ebook-deals/bestsellers-ebooks">
Bestsellers
</option>
<option value="/ebook-deals/biographies-and-memoirs-ebooks">
Biographies &amp; Memoirs
</option>
<option value="/ebook-deals/business-ebooks">
Business
</option>
<option value="/ebook-deals/chick-lit-ebooks">
Chick Lit
</option>
<option value="/ebook-deals/childrens-ebooks">
Children's
</option>
<option value="/ebook-deals/christian-fiction-ebooks">
Christian Fiction
</option>
<option value="/ebook-deals/christian-nonfiction-ebooks">
Christian Nonfiction
</option>
<option value="/ebook-deals/contemporary-romance-ebooks">
Contemporary Romance
</option>
<option value="/ebook-deals/cooking-ebooks">
Cooking
</option>
<option value="/ebook-deals/cozy-mysteries-ebooks">
Cozy Mysteries
</option>
<option value="/ebook-deals/crime-fiction-ebooks">
Crime Fiction
</option>
<option value="/ebook-deals/dark-erotica-ebooks">
Dark Romance &amp; Erotica
</option>
<option value="/ebook-deals/erotic-romance-ebooks">
Erotic Romance
</option>
<option value="/ebook-deals/fantasy-ebooks">
Fantasy
</option>
<option value="/ebook-deals/general-nonfiction-ebooks">
General Nonfiction
</option>
<option value="/ebook-deals/historical-fiction-ebooks">
Historical Fiction
</option>
<option value="/ebook-deals/historical-mysteries-ebooks">
Historical Mysteries
</option>
<option value="/ebook-deals/historical-romance-ebooks">
Historical Romance
</option>
<option value="/ebook-deals/history-ebooks">
History
</option>
<option value="/ebook-deals/horror-ebooks">
Horror
</option>
<option value="/ebook-deals/humor-ebooks">
Humor
</option>
<option value="/ebook-deals/lgbt-ebooks">
LGBT
</option>
<option value="/ebook-deals/literary-fiction-ebooks">
Literary Fiction
</option>
<option value="/ebook-deals/middle-grade-ebooks">
Middle Grade
</option>
<option value="/ebook-deals/new-adult-romance-ebooks">
New Adult Romance
</option>
<option value="/ebook-deals/paranormal-romance-ebooks">
Paranormal Romance
</option>
<option value="/ebook-deals/parenting-ebooks">
Parenting
</option>
<option value="/ebook-deals/politics-and-current-events-ebooks">
Politics &amp; Current Events
</option>
<option value="/ebook-deals/Psychological-Thrillers-ebooks">
Psychological Thrillers
</option>
<option value="/ebook-deals/Religion-and-spirituality-ebooks">
Religion &amp; Spirituality
</option>
<option value="/ebook-deals/romantic-suspense-ebooks">
Romantic Suspense
</option>
<option value="/ebook-deals/Science-ebooks">
Science
</option>
<option value="/ebook-deals/science-fiction-ebooks">
Science Fiction
</option>
<option value="/ebook-deals/supernatural-suspense-ebooks">
Supernatural Suspense
</option>
<option value="/ebook-deals/teen-and-young-adult-ebooks">
Teen &amp; Young Adult
</option>
<option value="/ebook-deals/thrillers-ebooks">
Thrillers
</option>
<option value="/ebook-deals/time-travel-romance-ebooks">
Time Travel Romance
</option>
<option value="/ebook-deals/true-crime-ebooks">
True Crime
</option>
<option value="/ebook-deals/womens-fiction-ebooks">
Women's Fiction
</option>
<option selected="" value="/ebook-deals/free-ebooks">Free Ebooks</option>
</select>
</form>


<div class="hidden-xs">
<h1 class="page-subtitle">Free eBooks</h1>
</div>

<div class="promotions" id="free-books-list">

<div class="book book-panel row">
<div class="col-sm-3 hidden-xs">
<div class="book-cover">
<a href="/B06Y1264PX-i-am-watching-you.pdf"><img class="img-responsive cover-image" src="https://images-na.ssl-images-amazon.com/images/I/51PeVt0WznL.jpg" alt="Pro pbid 15674"></a>
</div>
</div>
<div class="col-sm-9">
<div class="mobile-cover-image visible-xs pull-right">
<a href="/B06Y1264PX-i-am-watching-you.pdf"><img class="img-responsive cover-image-mobile" src="https://images-na.ssl-images-amazon.com/images/I/51PeVt0WznL.jpg" alt="Pro pbid 15674"></a>
</div>
<div class="book-title">
<a href="/B06Y1264PX-i-am-watching-you.pdf">I Am Watching You</a>
<small class="book-author">
by <strong>Teresa Driscoll</strong>
</small>
</div>
<p class="blurb">When Ella Longfield overhears two attractive young men flirting with teenage girls on a train, she thinks nothing of it until she realises they are fresh out of prison and her maternal instinct is put on high alert. But just as she's decided to call for help, something stops her.</p>
<p class="prices">
<span class="orig-price">$5.99</span>
<span class="disc-price">Free!</span>
</p>
<p class="avail-through">Available for a limited time</p>
<div class="retailer-links retailers">
<a class="haml-bub-button primary " data-retailer="Amazon Kindle" data-book-id="16168" target="_blank" href="/B06Y1264PX-i-am-watching-you.pdf">DOWNLOAD</a>
</div>
</div>
</div>


<div class="book book-panel row">
<div class="col-sm-3 hidden-xs">
<div class="book-cover">
<a href="/B07CTQJTD2-his-pregnant-christmas-princess.pdf"><img class="img-responsive cover-image" src="https://images-na.ssl-images-amazon.com/images/I/51QM76v62wL._SY346_.jpg" alt="Pro pbid 3990289"></a>
</div>
</div>
<div class="col-sm-9">
<div class="mobile-cover-image visible-xs pull-right">
<a href="/B07CTQJTD2-his-pregnant-christmas-princess.pdf"><img class="img-responsive cover-image-mobile" src="https://images-na.ssl-images-amazon.com/images/I/51QM76v62wL._SY346_.jpg" alt="Pro pbid 3990289"></a>
</div>
<div class="book-title">
<a href="/B07CTQJTD2-his-pregnant-christmas-princess.pdf">His Pregnant Christmas Princess</a>
<small class="book-author">
by <strong>Leah Ashton</strong>
</small>
</div>
<p class="blurb">When Princess Ana runs out on her wedding she needs a place to hide fast! Family friend and sexy security tycoon, Rhys North's Italian hideaway proves the perfect place to escape scandal. Until she has one unforgettable night in the arms of the brooding ex-soldier</p>
<p class="prices">
<span class="orig-price">$3.75</span>
<span class="disc-price">Free!</span>
</p>
<p class="avail-through">Available for a limited time</p>
<div class="retailer-links retailers">
<a class="haml-bub-button primary " data-retailer="Amazon Kindle" data-book-id="2659464" target="_blank" href="/B07CTQJTD2-his-pregnant-christmas-princess.pdf">DOWNLOAD</a>
</div>
</div>
</div>


<div class="book book-panel row">
<div class="col-sm-3 hidden-xs">
<div class="book-cover">
<a href="/B07BSFSSMZ-their-christmas-miracle.pdf"><img class="img-responsive cover-image" src="https://images-na.ssl-images-amazon.com/images/I/51ihBHtCHwL.jpg" alt="Pro pbid 3664639"></a>
</div>
</div>
<div class="col-sm-9">
<div class="mobile-cover-image visible-xs pull-right">
<a href="/B07BSFSSMZ-their-christmas-miracle.pdf"><img class="img-responsive cover-image-mobile" src="https://images-na.ssl-images-amazon.com/images/I/51ihBHtCHwL.jpg" alt="Pro pbid 3664639"></a>
</div>
<div class="book-title">
<a href="/B07BSFSSMZ-their-christmas-miracle.pdf">Their Christmas Miracle</a>
<small class="book-author">
by <strong>Barbara Wallace</strong>
</small>
</div>
<p class="blurb">Finding the wife he'd believed lost to him forever in a remote Scottish village seems like a miracle to wealthy CEO Thomas Collier. Rosalind is suffering from amnesia she can't remember anything from before her accident, including her husband and their daughter! As Christmas draws near, back in their London penthouse, can Thomas help Rosalind regain her past and embrace the loving future they all deserve?</p>
<p class="prices">
<span class="orig-price">$3.75</span>
<span class="disc-price">Free!</span>
</p>
<p class="avail-through">Available for a limited time</p>
<div class="retailer-links retailers">
<a class="haml-bub-button primary " data-retailer="Amazon Kindle" data-book-id="2310656" target="_blank" href="/B07BSFSSMZ-their-christmas-miracle.pdf">DOWNLOAD</a>
</div>
</div>
</div>


<div class="book book-panel row">
<div class="col-sm-3 hidden-xs">
<div class="book-cover">
<a href="/0062499459-dare-to-love-a-duke-the-london-underground.pdf"><img class="img-responsive cover-image" src="https://images-na.ssl-images-amazon.com/images/I/51vTqHnFxML._SX314_BO1,204,203,200_.jpg" alt="Pro pbid 3617875"></a>
</div>
</div>
<div class="col-sm-9">
<div class="mobile-cover-image visible-xs pull-right">
<a href="/0062499459-dare-to-love-a-duke-the-london-underground.pdf"><img class="img-responsive cover-image-mobile" src="https://images-na.ssl-images-amazon.com/images/I/51vTqHnFxML._SX314_BO1,204,203,200_.jpg" alt="Pro pbid 3617875"></a>
</div>
<div class="book-title">
<a href="/0062499459-dare-to-love-a-duke-the-london-underground.pdf">Dare to Love a Duke: The London Underground</a>
<small class="book-author">
by <strong>Eva Leigh</strong>
</small>
</div>
<p class="blurb">Thomas Powell, the new Duke of Northfield, knows he should be proper and principled, like his father. No more dueling, or carousing, or frequenting masked parties where Londoners indulge their wildest desires. But he's not ready to give up his freedom just yet. The club is an escape, a place where he can forget about society and the weight of his title.</p>
<p class="prices">
<span class="orig-price">$5.68</span>
<span class="disc-price">Free!</span>
</p>
<p class="avail-through">Available for a limited time</p>
<div class="retailer-links retailers">
<a class="haml-bub-button primary " data-retailer="Amazon Kindle" data-book-id="2250563" target="_blank" href="/0062499459-dare-to-love-a-duke-the-london-underground.pdf">DOWNLOAD</a>
</div>
</div>
</div>


<div class="book book-panel row">
<div class="col-sm-3 hidden-xs">
<div class="book-cover">
<a href="/1501135945-indianapolis-the-true-story-of-the-worst-sea-disaster-in-u.s.-naval-history-and-the-fifty-year-fight-to-exonerate-an-innocent-man.pdf"><img class="img-responsive cover-image" src="https://images-na.ssl-images-amazon.com/images/I/517a4WwQTZL._SX327_BO1,204,203,200_.jpg" alt="Pro pbid 4029289"></a>
</div>
</div>
<div class="col-sm-9">
<div class="mobile-cover-image visible-xs pull-right">
<a href="/1501135945-indianapolis-the-true-story-of-the-worst-sea-disaster-in-u.s.-naval-history-and-the-fifty-year-fight-to-exonerate-an-innocent-man.pdf"><img class="img-responsive cover-image-mobile" src="https://images-na.ssl-images-amazon.com/images/I/517a4WwQTZL._SX327_BO1,204,203,200_.jpg" alt="Pro pbid 4029289"></a>
</div>
<div class="book-title">
<a href="/1501135945-indianapolis-the-true-story-of-the-worst-sea-disaster-in-u.s.-naval-history-and-the-fifty-year-fight-to-exonerate-an-innocent-man.pdf">Indianapolis: The True Story of the Worst Sea Disaster in U.S</a>
<small class="book-author">
by <strong>Lynn Vincent</strong>
</small>
</div>
<p class="blurb">Just after midnight on July 30, 1945, days after delivering the components of the atomic bomb from California to the Pacific Islands in the most highly classified naval mission of the war, USS Indianapolis is sailing alone in the center of the Philippine Sea when she is struck by two Japanese torpedoes.</p>
<p class="prices">
<span class="orig-price">$14.99</span>
<span class="disc-price">Free!</span>
</p>
<p class="avail-through">Available for a limited time</p>
<div class="retailer-links retailers">
<a class="haml-bub-button primary " data-retailer="Amazon Kindle" data-book-id="2698752" target="_blank" href="/1501135945-indianapolis-the-true-story-of-the-worst-sea-disaster-in-u.s.-naval-history-and-the-fifty-year-fight-to-exonerate-an-innocent-man.pdf">DOWNLOAD</a>
</div>
</div>
</div>


<div class="book book-panel row">
<div class="col-sm-3 hidden-xs">
<div class="book-cover">
<a href="/1683993063-the-girl-who-lived-a-thrilling-suspense-novel.pdf"><img class="img-responsive cover-image" src="https://images-na.ssl-images-amazon.com/images/I/51h5nlfJl-L._SX345_BO1,204,203,200_.jpg" alt="Pro pbid 3514624"></a>
</div>
</div>
<div class="col-sm-9">
<div class="mobile-cover-image visible-xs pull-right">
<a href="/1683993063-the-girl-who-lived-a-thrilling-suspense-novel.pdf"><img class="img-responsive cover-image-mobile" src="https://images-na.ssl-images-amazon.com/images/I/51h5nlfJl-L._SX345_BO1,204,203,200_.jpg" alt="Pro pbid 3514624"></a>
</div>
<div class="book-title">
<a href="/1683993063-the-girl-who-lived-a-thrilling-suspense-novel.pdf">The Girl Who Lived: A Thrilling Suspense Novel</a>
<small class="book-author">
by <strong>Christopher Greyson</strong>
</small>
</div>
<p class="blurb">As the anniversary of the murders approaches, Faith Winters is released from the psychiatric hospital and yanked back to the last spot on earth she wants to be--her hometown where the slayings took place.</p>
<p class="prices">
<span class="orig-price">$23.44</span>
<span class="disc-price">Free!</span>
</p>
<p class="avail-through">Available for a limited time</p>
<div class="retailer-links retailers">
<a class="haml-bub-button primary " data-retailer="Amazon Kindle" data-book-id="2135771" target="_blank" href="/1683993063-the-girl-who-lived-a-thrilling-suspense-novel.pdf">DOWNLOAD</a>
</div>
</div>
</div>


<div class="book book-panel row">
<div class="col-sm-3 hidden-xs">
<div class="book-cover">
<a href="/B00AR5HWXQ-foreign-deceit-a-david-wolf-mystery.pdf"><img class="img-responsive cover-image" src="https://images-na.ssl-images-amazon.com/images/I/51YdKNVW3EL.jpg" alt="Pro pbid 957445"></a>
</div>
</div>
<div class="col-sm-9">
<div class="mobile-cover-image visible-xs pull-right">
<a href="/B00AR5HWXQ-foreign-deceit-a-david-wolf-mystery.pdf"><img class="img-responsive cover-image-mobile" src="https://images-na.ssl-images-amazon.com/images/I/51YdKNVW3EL.jpg" alt="Pro pbid 957445"></a>
</div>
<div class="book-title">
<a href="/B00AR5HWXQ-foreign-deceit-a-david-wolf-mystery.pdf">Foreign Deceit: A David Wolf Mystery</a>
<small class="book-author">
by <strong>Jeff Carson</strong>
</small>
</div>
<p class="blurb">Deputy Sergeant Wolf's ex-wife is in back in the picture, jealousy of his upcoming promotion to sheriff is escalating to violence, and a boy has just been reported missing a lot of action for a ski resort town in the middle of the Colorado Rockies.</p>
<p class="prices">
<span class="orig-price">$11.99</span>
<span class="disc-price">Free!</span>
</p>
<p class="avail-through">Available for a limited time</p>
<div class="retailer-links retailers">
<a class="haml-bub-button primary " data-retailer="Amazon Kindle" data-book-id="1288615" target="_blank" href="/B00AR5HWXQ-foreign-deceit-a-david-wolf-mystery.pdf">DOWNLOAD</a>
</div>
</div>
</div>


<div class="book book-panel row">
<div class="col-sm-3 hidden-xs">
<div class="book-cover">
<a href="/B010T0NJ4Y-dragon-marked-supernatural-prison-book-1.pdf"><img class="img-responsive cover-image" src="https://images-na.ssl-images-amazon.com/images/I/51lV3icLb1L.jpg" alt="Pro pbid 2555530"></a>
</div>
</div>
<div class="col-sm-9">
<div class="mobile-cover-image visible-xs pull-right">
<a href="/B010T0NJ4Y-dragon-marked-supernatural-prison-book-1.pdf"><img class="img-responsive cover-image-mobile" src="https://images-na.ssl-images-amazon.com/images/I/51lV3icLb1L.jpg" alt="Pro pbid 2555530"></a>
</div>
<div class="book-title">
<a href="/B010T0NJ4Y-dragon-marked-supernatural-prison-book-1.pdf">Dragon Marked (Supernatural Prison Book 1)</a>
<small class="book-author">
by <strong>Jaymin Eve</strong>
</small>
</div>
<p class="blurb">As a wolf shifter with razor-sharp senses, Jessa Lebron can perceive the slightest change in the air. And her lupine instincts go into overdrive right before her mother, who abandoned her years ago, returns to the pack bearing secrets that change everything.</p>
<p class="prices">
<span class="orig-price">$3.99</span>
<span class="disc-price">Free!</span>
</p>
<p class="avail-through">Available for a limited time</p>
<div class="retailer-links retailers">
<a class="haml-bub-button primary " data-retailer="Amazon Kindle" data-book-id="1956299" target="_blank" href="/B010T0NJ4Y-dragon-marked-supernatural-prison-book-1.pdf">DOWNLOAD</a>
</div>
</div>
</div>


<div class="book book-panel row">
<div class="col-sm-3 hidden-xs">
<div class="book-cover">
<a href="/152473165X-bad-blood-secrets-and-lies-in-a-silicon-valley-startup.pdf"><img class="img-responsive cover-image" src="https://images-na.ssl-images-amazon.com/images/I/41tmqEUIbSL._SX329_BO1,204,203,200_.jpg" alt="Pro pbid 6587"></a>
</div>
</div>
<div class="col-sm-9">
<div class="mobile-cover-image visible-xs pull-right">
<a href="/152473165X-bad-blood-secrets-and-lies-in-a-silicon-valley-startup.pdf"><img class="img-responsive cover-image-mobile" src="https://images-na.ssl-images-amazon.com/images/I/41tmqEUIbSL._SX329_BO1,204,203,200_.jpg" alt="Pro pbid 6587"></a>
</div>
<div class="book-title">
<a href="/152473165X-bad-blood-secrets-and-lies-in-a-silicon-valley-startup.pdf">Bad Blood: Secrets and Lies in a Silicon Valley Startup</a>
<small class="book-author">
by <strong>John Carreyrou</strong>
</small>
</div>
<p class="blurb">In 2014, Theranos founder and CEO Elizabeth Holmes was widely seen as the female Steve Jobs: a brilliant Stanford dropout whose startup "unicorn" promised to revolutionize the medical industry with a machine that would make blood testing significantly faster and easier.</p>
<p class="prices">
<span class="orig-price">$12.83</span>
<span class="disc-price">Free!</span>
</p>
<p class="avail-through">Available for a limited time</p>
<div class="retailer-links retailers">
<a class="haml-bub-button primary " data-retailer="Amazon Kindle" data-book-id="6768" target="_blank" href="/152473165X-bad-blood-secrets-and-lies-in-a-silicon-valley-startup.pdf">DOWNLOAD</a>
</div>
</div>
</div>


<div class="book book-panel row">
<div class="col-sm-3 hidden-xs">
<div class="book-cover">
<a href="/B07L18GS63-dirty-secrets-lauren-landish.pdf"><img class="img-responsive cover-image" src="https://images-na.ssl-images-amazon.com/images/I/41AMgZwlEQL.jpg" alt="Pro pbid 4264547"></a>
</div>
</div>
<div class="col-sm-9">
<div class="mobile-cover-image visible-xs pull-right">
<a href="/B07L18GS63-dirty-secrets-lauren-landish.pdf"><img class="img-responsive cover-image-mobile" src="https://images-na.ssl-images-amazon.com/images/I/41AMgZwlEQL.jpg" alt="Pro pbid 4264547"></a>
</div>
<div class="book-title">
<a href="/B07L18GS63-dirty-secrets-lauren-landish.pdf">Dirty Secrets</a>
<small class="book-author">
by <strong>Lauren Landish</strong>
</small>
</div>
<p class="blurb">Whatever it takes, I'll have her at my side. I'll Tease and tempt her with sweet words. Fray away at her sanity with secrets. Dare her to accept my depravity by mixing it with pleasure she's never known.</p>
<p class="prices">
<span class="orig-price">$12.99</span>
<span class="disc-price">Free!</span>
</p>
<p class="avail-through">Available for a limited time</p>
<div class="retailer-links retailers">
<a class="haml-bub-button primary " data-retailer="Amazon Kindle" data-book-id="2935489" target="_blank" href="/B07L18GS63-dirty-secrets-lauren-landish.pdf">DOWNLOAD</a>
</div>
</div>
</div>


<div class="book book-panel row">
<div class="col-sm-3 hidden-xs">
<div class="book-cover">
<a href="/B079DVJYLK-of-blood-and-bone-chronicles-of-the-one.pdf"><img class="img-responsive cover-image" src="https://images-na.ssl-images-amazon.com/images/I/51wcGk5gd%2BL.jpg" alt="Pro pbid 4080122"></a>
</div>
</div>
<div class="col-sm-9">
<div class="mobile-cover-image visible-xs pull-right">
<a href="/B079DVJYLK-of-blood-and-bone-chronicles-of-the-one.pdf"><img class="img-responsive cover-image-mobile" src="https://images-na.ssl-images-amazon.com/images/I/51wcGk5gd%2BL.jpg" alt="Pro pbid 4080122"></a>
</div>
<div class="book-title">
<a href="/B079DVJYLK-of-blood-and-bone-chronicles-of-the-one.pdf">Of Blood and Bone: Chronicles of The One, Book 2</a>
<small class="book-author">
by <strong>Nora Roberts</strong>
</small>
</div>
<p class="blurb">Fallon Swift, approaching her thirteenth birthday, barely knows the world that existed before the city where her parents lived, now in ruins and reclaimed by nature since the Doom sickened and killed billions. Traveling anywhere is a danger, as vicious gangs of Raiders and fanatics called Purity Warriors search for their next victim.</p>
<p class="prices">
<span class="orig-price">$11.89</span>
<span class="disc-price">Free!</span>
</p>
<p class="avail-through">Available for a limited time</p>
<div class="retailer-links retailers">
<a class="haml-bub-button primary " data-retailer="Amazon Kindle" data-book-id="2749824" target="_blank" href="/B079DVJYLK-of-blood-and-bone-chronicles-of-the-one.pdf">DOWNLOAD</a>
</div>
</div>
</div>


<div class="book book-panel row">
<div class="col-sm-3 hidden-xs">
<div class="book-cover">
<a href="/0316310352-the-wicked-king-the-folk-of-the-air.pdf"><img class="img-responsive cover-image" src="https://images-na.ssl-images-amazon.com/images/I/51DNlZnHq2L._SX331_BO1,204,203,200_.jpg" alt="Pro pbid 1154087"></a>
</div>
</div>
<div class="col-sm-9">
<div class="mobile-cover-image visible-xs pull-right">
<a href="/0316310352-the-wicked-king-the-folk-of-the-air.pdf"><img class="img-responsive cover-image-mobile" src="https://images-na.ssl-images-amazon.com/images/I/51DNlZnHq2L._SX331_BO1,204,203,200_.jpg" alt="Pro pbid 1154087"></a>
</div>
<div class="book-title">
<a href="/0316310352-the-wicked-king-the-folk-of-the-air.pdf">The Wicked King (The Folk of the Air)</a>
<small class="book-author">
by <strong>Holly Black</strong>
</small>
</div>
<p class="blurb">After the jaw-dropping revelation that Oak is the heir to Faerie, Jude must keep her younger brother safe. To do so, she has bound the wicked king, Cardan, to her, and made herself the power behind the throne. Navigating the constantly shifting political alliances of Faerie would be difficult enough if Cardan were easy to control.</p>
<p class="prices">
<span class="orig-price">$15.99</span>
<span class="disc-price">Free!</span>
</p>
<p class="avail-through">Available for a limited time</p>
<div class="retailer-links retailers">
<a class="haml-bub-button primary " data-retailer="Amazon Kindle" data-book-id="1686653" target="_blank" href="/0316310352-the-wicked-king-the-folk-of-the-air.pdf">DOWNLOAD</a>
</div>
</div>
</div>


<div class="book book-panel row">
<div class="col-sm-3 hidden-xs">
<div class="book-cover">
<a href="/B01B4N7XK6-touched-the-caress-of-fate-a-dark-romantic-fantasy.pdf"><img class="img-responsive cover-image" src="https://images-na.ssl-images-amazon.com/images/I/518dnSAF1PL.jpg" alt="Pro pbid 979315"></a>
</div>
</div>
<div class="col-sm-9">
<div class="mobile-cover-image visible-xs pull-right">
<a href="/B01B4N7XK6-touched-the-caress-of-fate-a-dark-romantic-fantasy.pdf"><img class="img-responsive cover-image-mobile" src="https://images-na.ssl-images-amazon.com/images/I/518dnSAF1PL.jpg" alt="Pro pbid 979315"></a>
</div>
<div class="book-title">
<a href="/B01B4N7XK6-touched-the-caress-of-fate-a-dark-romantic-fantasy.pdf">Touched - The Caress of Fate: A Dark Romantic Fantasy</a>
<small class="book-author">
by <strong>Elisa S. Amore</strong>
</small>
</div>
<p class="blurb">When Gemma's eyes first meet the dark, piercing gaze of Evan James, an ominous shadow creeps into her life, ultimately leading her to face her destiny. She doesn't realize Evan is one of Death's soldiers and that Death is summoning her.</p>
<p class="prices">
<span class="orig-price">$22.00</span>
<span class="disc-price">Free!</span>
</p>
<p class="avail-through">Available for a limited time</p>
<div class="retailer-links retailers">
<a class="haml-bub-button primary " data-retailer="Amazon Kindle" data-book-id="1303943" target="_blank" href="/B01B4N7XK6-touched-the-caress-of-fate-a-dark-romantic-fantasy.pdf">DOWNLOAD</a>
</div>
</div>
</div>


<div class="book book-panel row">
<div class="col-sm-3 hidden-xs">
<div class="book-cover">
<a href="/B076HKN1J2-blood-oath.pdf"><img class="img-responsive cover-image" src="https://images-na.ssl-images-amazon.com/images/I/51l4obvBGQL.jpg" alt="Pro pbid 15384"></a>
</div>
</div>
<div class="col-sm-9">
<div class="mobile-cover-image visible-xs pull-right">
<a href="/B076HKN1J2-blood-oath.pdf"><img class="img-responsive cover-image-mobile" src="https://images-na.ssl-images-amazon.com/images/I/51l4obvBGQL.jpg" alt="Pro pbid 15384"></a>
</div>
<div class="book-title">
<a href="/B076HKN1J2-blood-oath.pdf">Blood Oath (The Darkest Drae Book 1)</a>
<small class="book-author">
by <strong>Raye Wagner</strong>
</small>
</div>
<p class="blurb">I'm an ordinary mortal girl. Lord Irrik is a depraved dragon shifter. King Irdelron is an immortal tyrant. In the disease ridden land of Verald, life is mapped out much like the established rings of our kingdom. Everyone has a role</p>
<p class="prices">
<span class="orig-price">$23.95</span>
<span class="disc-price">Free!</span>
</p>
<p class="avail-through">Available for a limited time</p>
<div class="retailer-links retailers">
<a class="haml-bub-button primary " data-retailer="Amazon Kindle" data-book-id="15877" target="_blank" href="/B076HKN1J2-blood-oath.pdf">DOWNLOAD</a>
</div>
</div>
</div>


<div class="book book-panel row">
<div class="col-sm-3 hidden-xs">
<div class="book-cover">
<a href="/1503941353-in-farleigh-field.pdf"><img class="img-responsive cover-image" src="https://images-na.ssl-images-amazon.com/images/I/51Xg26g1znL._SX331_BO1,204,203,200_.jpg" alt="Pro pbid 4105829"></a>
</div>
</div>
<div class="col-sm-9">
<div class="mobile-cover-image visible-xs pull-right">
<a href="/1503941353-in-farleigh-field.pdf"><img class="img-responsive cover-image-mobile" src="https://images-na.ssl-images-amazon.com/images/I/51Xg26g1znL._SX331_BO1,204,203,200_.jpg" alt="Pro pbid 4105829"></a>
</div>
<div class="book-title">
<a href="/1503941353-in-farleigh-field.pdf">In Farleigh Field: A Novel of World War II</a>
<small class="book-author">
by <strong>Rhys Bowen</strong>
</small>
</div>
<p class="blurb">World War II comes to Farleigh Place, the ancestral home of Lord Westerham and his five daughters, when a soldier with a failed parachute falls to his death on the estate. After his uniform and possessions raise suspicions, MI5 operative and family friend Ben Cresswell is covertly tasked with determining if the man is a German spy.</p>
<p class="prices">
<span class="orig-price">$15.99</span>
<span class="disc-price">Free!</span>
</p>
<p class="avail-through">Available for a limited time</p>
<div class="retailer-links retailers">
<a class="haml-bub-button primary " data-retailer="Amazon Kindle" data-book-id="2775727" target="_blank" href="/1503941353-in-farleigh-field.pdf">DOWNLOAD</a>
</div>
</div>
</div>


</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="page-footer">
<div class="footer stackable">
<div class="container">
<div class="row">
<div class="col-md-3 col-sm-3">
<div class="row footer-header">

</div>
</div>
<div class="link-panel col-md-3 col-sm-3">
<h3>Company</h3>
<ul class="list-unstyled">
<li><a href="#">About</a></li>
<li><a href="/dmca">DMCA</a></li>
<li><a href="/disclaimer">Disclaimer</a></li>
<li><a href="/contact">Contact</a></li>
</ul>
</div>
<div class="link-panel col-md-3 col-sm-3">
<h3>Readers</h3>
<ul class="list-unstyled">
<li><a href="#">In the News</a></li>
<li><a href="#">Free Ebooks</a></li>
<li><a href="#">Free Kindle Books</a></li>
<li><a href="#">Invite Your Friends</a></li>
<li><a href="#">Help</a></li>
</ul>
</div>
<div class="link-panel col-md-3 col-sm-3">
<h3>Publishers &amp; Authors</h3>
<ul class="list-unstyled">
<li><a href="#">Partners Overview</a></li>
<li><a href="#">Submit New Deal</a></li>
<li><a href="#">Partner Dashboard</a></li>
<li><a href="#">Claim an Author Profile</a></li>
<li><a href="#">Partner FAQ</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>

</div>
</div>
</body>
</html>
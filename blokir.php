<?php
$url = $_SERVER['REQUEST_URI'];
$servername = 'http://'.$_SERVER['HTTP_HOST'];
$block_urls = array(
'http://ax.heroz.us/2881826369/nicolas-bouvier-un-galet-dans-le-torrent-du-monde.pdf',
'http://download-pdf-epub-ebook.wordnverse.com/cousins-an-alpha-bad-boy-romance-book-2-volume-2.pdf',
'http://download-pdf-epub-ebook.wordnverse.com/fantasy-of-frost-the-tainted-accords-1-by-kelly-st-clare.pdf',
'http://free-ebook.wordnverse.com/the_highwaymans_lady.pdf',
'http://download-pdf-epub-ebook.wordnverse.com/a-mother-for-his-children-love-inspired-historical.pdf',
'http://download-pdf-epub-ebook.wordnverse.com/how-to-sell-books-by-the-truckload-on-amazon-power-pack-sell-books-by-the-truckload-and-get-reviews-by-the-truckload.pdf',
'http://download-pdf-epub-ebook.wordnverse.com/a-christmas-code-the-code-breakers-series-book-2.pdf',
'http://download-pdf-epub-ebook.wordnverse.com/the-illusionist-by-fran-heckrotte.pdf',
'http://download-pdf-epub-ebook.wordnverse.com/energy-systems-analysis-and-management-second-edition.pdf',
'http://download-pdf-epub-ebook.wordnverse.com/cases-in-financial-reporting-7th-edition-solutions-pdf.pdf',
'http://download-pdf-epub-ebook.wordnverse.com/silent-harmony-a-vivienne-taylor-horse-lovers-mystery-fairmont-riding-academy.pdf',
'http://free-ebook.wordnverse.com/bloccati_dalla_neve_teodora_kostova.pdf',
'http://download-pdf-epub-ebook.wordnverse.com/submission-in-paradise.pdf',
'http://download-pdf-epub-ebook.wordnverse.com/dead-man-rising-dante-valentine-2-by-lilith-saintcrow.pdf',
'http://download-pdf-epub-ebook.wordnverse.com/resist-the-resistance-series.pdf',
'http://download-pdf-epub-ebook.wordnverse.com/ill-show-mine-lauren-gallagher.pdf',
'http://download-pdf-epub-ebook.wordnverse.com/immortal-ops-box-set-books-1-4-shifter-romances.pdf',
'http://download-pdf-epub-ebook.wordnverse.com/claiming-his-need-feral-breed-motorcycle-club-volume-2.pdf',
'http://download-pdf-epub-ebook.wordnverse.com/falling-colours-the-misadventures-of-a-vision-painter.pdf',
'http://download-pdf-epub-ebook.wordnverse.com/the-geneva-decision-pia-sabel-1-by-seeley-james.pdf',
'http://download-pdf-epub-ebook.wordnverse.com/book-and-pdf-seize-flame-lynda-j-cox.pdf',
'http://download-pdf-epub-ebook.wordnverse.com/harry-starke-the-harry-starke-novels-volume-1.pdf',
'http://download-pdf-epub-ebook.wordnverse.com/the-battle-lords-lady-the-battle-lord-saga-book-1.pdf',
'http://download-pdf-epub-ebook.wordnverse.com/the-deeper-game-annika-martin.pdf',
'http://download-pdf-epub-ebook.wordnverse.com/naughty-escapes-eleven-naughty-vacation-getaways.pdf',
'http://download-pdf-epub-ebook.wordnverse.com/the-trouble-with-love-lauren-layne-free.pdf',
'http://download-pdf-epub-ebook.wordnverse.com/the-power-of-two-2176-book-4.pdf',
'http://download-pdf-epub-ebook.wordnverse.com/rules-of-payne-2-cake-love-volume-2.pdf',
'http://download-pdf-epub-ebook.wordnverse.com/the-klockwerk-kraken.pdf',
'http://download-pdf-epub-ebook.wordnverse.com/havens-creed-parker-williams.pdf',
'http://download-pdf-epub-ebook.wordnverse.com/a-day-of-fire-a-novel-of-pompeii-by-stephanie-dray.pdf',
'http://download-pdf-epub-ebook.wordnverse.com/styx-and-stoned-the-grim-reality-series-book-2.pdf',
'http://download-pdf-epub-ebook.wordnverse.com/alpha-wolfs-pet-kept.pdf',
'http://download-pdf-epub-ebook.wordnverse.com/captive-romance-a-limited-edition-boxed-set-of-two-full-length-historical-romance-novels.pdf',

);
foreach ($block_urls as $urls_block) {
if (strpos($servername.$url, $urls_block) !== false) {
die('404 Not Found');
exit; 
}
}
?>
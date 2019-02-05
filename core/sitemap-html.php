<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sitemap - <?php echo $site_name; ?></title>
    </head>
    <body>

    <div>
        <ul>
            <?php
            $array = get_lists(20000);
            foreach ($array as $kw) { ?>
            <li><a href="<?php
                    //echo $domain.'/index.php?tipe=read&kw='.sanitize_title2($kw);
                    echo $domain.'/'.sanitize_title2($kw).'.pdf';
                    ?>" title="<?php echo ucfirst($kw); ?>"><?php echo ucfirst($kw); ?></a></li>
            <?php
            }
            ?>
        </ul>
	</div>
    </body>
</html>
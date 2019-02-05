<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"

"http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>

<meta content="text/html; charset=utf-8" http-equiv="content-type">

<script type="text/javascript">

//Alerts to errors.

window.onerror=function(msg, url, linenumber){var logerror='Error message: ' + msg + '. Url: ' + url + 'Line Number: ' + linenumber;alert(logerror);return false}

</script>

<title>Remote File Transfer</title>

<style type="text/css">

body

{

margin: 0 auto;

width:900px;

font-family:serif

}

#upload_box

{

background-color: LightBlue;

border:1px solid Black;

margin-top:40px;

}

</style>

<?php

if (isset($_POST['myupload']))

{

$user_name = $_POST['user'];

$pass_word = $_POST['pass'];

if ( $user_name=='aan' && $pass_word=='aan' )

{

$links_list = $_POST['upload'];

$incr = 0;

$links = explode("\r\n",$links_list);

define('BUFSIZ', 4095);

for ( $incr == 0 ; $incr < count($links) ; $incr++ )

{

$url = $links[$incr];

$rfile = fopen($url, 'r');

$lfile = fopen(basename($url), 'wb');

while(!feof($rfile))

fwrite($lfile, fread($rfile, BUFSIZ), BUFSIZ);

fclose($rfile);

fclose($lfile);

}

}

}

?>

<script type="text/javascript"></script>

</head>

<body>

<fieldset id="upload_box">

<label>Remote File Transfer Form</label>

<form action="" method="post">

<input type="text" name="user" Value="Your Username">

<input type="text" name="pass" Value="Your Password"><br>

<textarea name="upload" cols=80 rows=20></textarea>

<input type="submit" name="myupload" value="Transfer Files">

</form>

</fieldset>

</body>

</html>

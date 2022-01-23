<?php
$dir = 'spambot';
if(!is_dir($dir)){	mkdir($dir,0777);
}
$file = date('Y-m-d').'.txt';
$ip = $_SERVER['REMOTE_ADDR'];
$filename = $dir.'/'.$file;
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$info = '
===========================
IP: '.$ip .'
Time: '.date('d/m/Y H:i:s a').'
Filename: '.basename($_SERVER['PHP_SELF']).'
URL: '.$url.'
';
file_put_contents($filename, $info, FILE_APPEND);

?>
<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>404 Not Found,</title></head><body><h1>You are banned!</h1></body></html>

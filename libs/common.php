<?php

session_start();
header('Cache-control: private'); // IE 6 FIX
if(isSet($_GET['lan']))
{
$lan = $_GET['lan'];
// register the session and set the cookie
$_SESSION['lan'] = $lan;
setcookie('lan', $lan, time() + (3600 * 24 * 30));
}
else if(isSet($_SESSION['lan']))
{
$lan = $_SESSION['lan'];
}
else if(isSet($_COOKIE['lan']))
{
$lan = $_COOKIE['lan'];
}
else
{
$lan = 'en';
}
switch ($lan) {
case 'en':
$lan_file = 'main.eng.php';
break;
case 'uk':
$lan_file = 'main.uk.php';
break;
default:
$lan_file = 'main.en.php';
}
include_once 'languages/'.$lan_file;
?>

<?php

require 'D:\Wamp\wamp\www\BlogProject\libs\Smarty.class.php';

include "D:\Wamp\wamp\www\BlogProject\libs\main.en.php";
include "D:\Wamp\wamp\www\BlogProject\libs\main.uk.php";

$smarty = new Smarty();

$smarty -> template_dir = 'D:\Wamp\wamp\www\BlogProject\libs\templates';
$smarty -> compile_dir = 'D:\Wamp\wamp\www\BlogProject\libs\templates_c';


$lan = isset($_GET['lang']) ? $_GET['lang'] : 'en';
  switch ($lan) {
  case 'en':
  $title = $title_en;
  $home = $home_en;
  $news = $news_en;
  $logIn = $logIn_en;
  $language = $language_en;
  break;
  case 'uk':
  $title = $title_uk;
  $home = $home_uk;
  $news = $news_uk;
  $logIn = $logIn_uk;
  $language = $language_uk;
  break;
}


 $smarty -> assign("title",$title);
 $smarty -> assign("home",$home);
 $smarty -> assign("news",$news);
 $smarty -> assign("logIn",$logIn);
 $smarty -> assign("language",$language);

 $smarty -> display("main.tpl");

?>



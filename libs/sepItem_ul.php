<?php

error_reporting(E_ALL & ~E_DEPRECATED);

require 'D:\Wamp\wamp\www\BlogProject\libs\Smarty.class.php';

include "D:\Wamp\wamp\www\BlogProject\libs\sepItem_ul.en.php";
include "D:\Wamp\wamp\www\BlogProject\libs\sepItem_ul.uk.php";



$smarty = new Smarty();

$smarty -> template_dir = 'D:\Wamp\wamp\www\BlogProject\libs\templates';
$smarty -> compile_dir = 'D:\Wamp\wamp\www\BlogProject\libs\templates_c';

 $servername = "localhost";
 $username = "root";
 $password = "Alina_DB";
 $dbname = "blog";
 
 $conn = new mysqli($servername, $username, $password,$dbname);

 if($conn->connect_error){
 	die("Connection failed: ".$conn ->connect_error);
 }

 session_start();
 $sepItemID = $_SESSION['itemID'];

 $title = "Separate Item Unloged";
 $smarty -> assign("title",$title);



$lan = isset($_GET['lang']) ? $_GET['lang'] : 'en';
  switch ($lan) {
  case 'en':

  $title = $title_en;
  $news = $news_en;
  $logIn = $logIn_en;
  $language = $language_en;


  $qImg = "SELECT img
           FROM image
           WHERE item_id = '".$sepItemID."';";
  
  $resImg = $conn -> query($qImg);
   
    if($resImg -> num_rows > 0){
 	    while($row7 = $resImg->fetch_assoc()){
 		      $img = '<img class="imgG" src="data:image/jpeg;base64,'.base64_encode( $row7['img'] ).'"/>';
 	    }
     }

  $qDate = "SELECT post_date
            FROM blog_item
            WHERE item_id = '".$sepItemID."';";
  $resDate = $conn -> query($qDate);
  
  if($resDate -> num_rows > 0){
 	while($row3 = $resDate->fetch_assoc()){
 		  $date = $row3['post_date'];
 	   }
  }
     

  $qSepName = "SELECT name_en
              FROM blog_item
              WHERE item_id = '".$sepItemID."';";

  $resSepItem = $conn -> query($qSepName);
    if($resSepItem -> num_rows > 0){
 	   while($row1 = $resSepItem -> fetch_assoc()){
 		     $sepName = $row1['name_en'];
 	}
  } 

  $qCountry_en = "SELECT country_en
                  FROM blog_item
                  WHERE item_id = '".$sepItemID."';";
  $resCountry_en = $conn -> query($qCountry_en);
  
  if($resCountry_en -> num_rows > 0){
 	while($row4 = $resCountry_en->fetch_assoc()){
 		  $country = $row4['country_en'];
 	}
 }

 $qCountry_en = "SELECT song_title_en
                  FROM blog_item
                  WHERE item_id = '".$sepItemID."';";
  $resCountry_en = $conn -> query($qCountry_en);
  
  if($resCountry_en -> num_rows > 0){
  while($row4 = $resCountry_en->fetch_assoc()){
      $song = $row4['song_title_en'];
  }
 }

 $qFulArticle_en = "SELECT full_en
                    FROM blog_item
                    WHERE item_id = '".$sepItemID."';";
 $resFulArticle_en = $conn->query($qFulArticle_en);
 
 if($resFulArticle_en -> num_rows > 0){
 	while($row6 = $resFulArticle_en->fetch_assoc()){
 		  $fullArticle = $row6['full_en'];
 	}
 }
 

  break;


  case 'uk':

  $title = $title_uk;
  $news = $news_uk;
  $logIn = $logIn_uk;
  $language = $language_uk;

  $qImg = "SELECT img
           FROM image
           WHERE item_id = '".$sepItemID."';";
  
  $resImg = $conn -> query($qImg);
   
    if($resImg -> num_rows > 0){
 	    while($row7 = $resImg->fetch_assoc()){
 		      $img = '<img class="imgG" src="data:image/jpeg;base64,'.base64_encode( $row7['img'] ).'"/>';
 	    }
     }

  $qDate = "SELECT post_date
            FROM blog_item
            WHERE item_id = '".$sepItemID."';";
  $resDate = $conn -> query($qDate);
  
  if($resDate -> num_rows > 0){
 	while($row3 = $resDate->fetch_assoc()){
 		  $date = $row3['post_date'];
 	   }
  }


  $qSepName = "SELECT name_uk
               FROM blog_item
               WHERE item_id = '".$sepItemID."';";

  $resSepItem = $conn -> query($qSepName);
    if($resSepItem -> num_rows > 0){
 	   while($row1 = $resSepItem -> fetch_assoc()){
 		     $sepName = $row1['name_uk'];
 	}
  }

  $qCountry_en = "SELECT country_uk
                  FROM blog_item
                  WHERE item_id = '".$sepItemID."';";
  $resCountry_en = $conn -> query($qCountry_en);
  
  if($resCountry_en -> num_rows > 0){
 	while($row4 = $resCountry_en->fetch_assoc()){
 		  $country = $row4['country_uk'];
 	}
 }

 $qCountry_en = "SELECT song_title_uk
                  FROM blog_item
                  WHERE item_id = '".$sepItemID."';";
  $resCountry_en = $conn -> query($qCountry_en);
  
  if($resCountry_en -> num_rows > 0){
  while($row4 = $resCountry_en->fetch_assoc()){
      $song = $row4['song_title_uk'];
  }
 }

 $qFulArticle_en = "SELECT full_uk
                      FROM blog_item
                      WHERE item_id = '".$sepItemID."';";
 $resFulArticle_en = $conn->query($qFulArticle_en);
 
 if($resFulArticle_en -> num_rows > 0){
 	while($row6 = $resFulArticle_en->fetch_assoc()){
 		  $fullArticle = $row6['full_uk'];
 	}
 }
  

  break;
}


 $smarty -> assign("news",$news);
 $smarty -> assign("logIn",$logIn);
 $smarty -> assign("language",$language);

 $smarty -> assign('img',$img);
 $smarty -> assign('sepName',$sepName);
 $smarty -> assign('date',$date);
 $smarty -> assign('country',$country);
 $smarty -> assign('song',$song);
 $smarty -> assign('fullArticle',$fullArticle);
 

 $smarty -> display("sepItem_ul.tpl");

?>
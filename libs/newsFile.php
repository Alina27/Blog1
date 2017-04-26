<?php

error_reporting(E_ALL & ~E_DEPRECATED);

session_start();
 if(!($_SESSION['userName'])){
  header("main.php");
 } 

 else {

require 'D:\Wamp\wamp\www\BlogProject\libs\Smarty.class.php';

include "D:\Wamp\wamp\www\BlogProject\libs\my.en.php";
include "D:\Wamp\wamp\www\BlogProject\libs\my.uk.php";



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

 $qCountNews = "SELECT COUNT(item_id)
                FROM blog_item;";

 $countRows = $conn -> query($qCountNews);

 if($countRows -> num_rows > 0){
 	while($row1 = $countRows->fetch_assoc()){
 		 $countNews = (INT)$row1['COUNT(item_id)'];
 	}
 }

 else {
 	echo "No results";
 }

 $count = $countNews % 3;


 $lan = isset($_GET['lang']) ? $_GET['lang'] : 'en';
  switch ($lan) {
  case 'en':
  $title = $title_en;
  //$home = $home_en;
  $logOut = $logOut_en;
  $addNews = $addNews_en; 
  $language = $language_en;
  $readArt = $readArt_en;
  $deleteArt = $deleteArt_en;

  $qItemID = "SELECT item_id
              FROM blog_item;";
  $resItemID = $conn->query($qItemID);
  $itemID = array();
  if($resItemID -> num_rows > 0){
     while($row8 = $resItemID -> fetch_assoc()){
          $itemID[] = $row8['item_id']; 
     }
  }

  //session_start();
  $_SESSION['itemID'] = $itemID;


  $qDate = "SELECT post_date
            FROM blog_item;";
  $resDate = $conn -> query($qDate);
  $date = array();
  if($resDate -> num_rows > 0){
 	while($row3 = $resDate->fetch_assoc()){
 		  $date[] = $row3['post_date'];
 	}
  }


  $qName  = "SELECT name_en
             FROM blog_item;";
  $resName = $conn -> query($qName);
  $name = array();
  if($resName -> num_rows > 0){
 	while($row2 = $resName->fetch_assoc()){
 		  $name[] = $row2['name_en'];
 	}
 }

  $qCountry_en = "SELECT country_en
                  FROM blog_item;";
  $resCountry_en = $conn -> query($qCountry_en);
  $country = array();
  if($resCountry_en -> num_rows > 0){
 	while($row4 = $resCountry_en->fetch_assoc()){
 		  $country[] = $row4['country_en'];
 	}
 }

 $countryLabel = "Country: ";

 $qSong_en = "SELECT song_title_en
              FROM blog_item;";
 $resSong_en = $conn->query($qSong_en);
 $song = array();
 if($resSong_en -> num_rows > 0){
 	while($row5 = $resSong_en->fetch_assoc()){
 		  $song[] = $row5['song_title_en'];
 	}
 }

 $songLabel = "Song: ";

 $qShortArticle_en = "SELECT short_en
                      FROM blog_item;";
 $resShortArticle_en = $conn->query($qShortArticle_en);
 $shortArticle = array();
 if($resShortArticle_en -> num_rows > 0){
 	while($row6 = $resShortArticle_en->fetch_assoc()){
 		  $shortArticle[] = $row6['short_en'];
 	}
 }

 $qImg = "SELECT img
          FROM image
          INNER JOIN blog_item
          ON blog_item.item_id = image.item_id; ";
 $resImg = $conn -> query($qImg);
 $img = array();
 if($resImg -> num_rows > 0){
 	while($row7 = $resImg->fetch_assoc()){
 		$img[] = '<img src="data:image/jpeg;base64,'.base64_encode( $row7['img'] ).'"/>';
 	}
 }


  break;


  case 'uk':
  $title = $title_uk;
  //$home = $home_uk;
  $logOut = $logOut_uk;
  $addNews = $addNews_uk; 
  $language = $language_uk;
  $readArt = $readArt_uk;
  $deleteArt = $deleteArt_uk; 


  $qItemID = "SELECT item_id
              FROM blog_item;";
  $resItemID = $conn->query($qItemID);
  $itemID = array();
  if($resItemID -> num_rows > 0){
     while($row8 = $resItemID -> fetch_assoc()){
          $itemID[] = $row8['item_id']; 
     }
  }

  $qDate = "SELECT post_date
            FROM blog_item;";
  $resDate = $conn -> query($qDate);
  $date = array();
  if($resDate -> num_rows > 0){
 	while($row3 = $resDate->fetch_assoc()){
 		  $date[] = $row3['post_date'];
 	   }
  }


  $qName  = "SELECT name_uk
             FROM blog_item;";
  $resName = $conn -> query($qName);
  $name = array();
  if($resName -> num_rows > 0){
 	while($row2 = $resName->fetch_assoc()){
 		  $name[] = $row2['name_uk'];
 	}
 }

  $qCountry_en = "SELECT country_uk
                  FROM blog_item;";
  $resCountry_en = $conn -> query($qCountry_en);
  $country = array();
  if($resCountry_en -> num_rows > 0){
 	while($row4 = $resCountry_en->fetch_assoc()){
 		  $country[] = $row4['country_uk'];
 	}
 }

 $countryLabel = "Країна: ";

 $qSong_en = "SELECT song_title_uk
              FROM blog_item;";
 $resSong_en = $conn->query($qSong_en);
 $song = array();
 if($resSong_en -> num_rows > 0){
 	while($row5 = $resSong_en->fetch_assoc()){
 		  $song[] = $row5['song_title_uk'];
 	}
 }

 $songLabel = "Пісня: ";

 $qShortArticle_uk = "SELECT short_uk
                      FROM blog_item;";
 $resShortArticle_uk = $conn->query($qShortArticle_uk);
 $shortArticle = array();
 if($resShortArticle_uk -> num_rows > 0){
 	while($row6 = $resShortArticle_uk->fetch_assoc()){
 		  $shortArticle[] = $row6['short_uk'];
 	}
 }


 $qImg = "SELECT img
          FROM image
          INNER JOIN blog_item
          ON blog_item.item_id = image.item_id; ";
 $resImg = $conn -> query($qImg);
 $img = array();
 if($resImg -> num_rows > 0){
 	while($row7 = $resImg->fetch_assoc()){
 		$img[] = '<img id = "myImg" src="data:image/jpeg;base64,'.base64_encode( $row7['img'] ).'"/>';
 	}
 }

  break;
}

if(isset($_POST['read'])){
  session_start();
  $_SESSION['itemID'] = $_POST['read'];
  header("Location: sepItem.php");
}


 $smarty -> assign("title",$title);
 //$smarty -> assign("home",$home);
 $smarty -> assign("logOut",$logOut);
 $smarty -> assign("addNews",$addNews);
 $smarty -> assign("language",$language);
 $smarty -> assign("readArt",$readArt);
 $smarty -> assign("deleteArt",$deleteArt);


 $smarty -> assign('itemID',$itemID);
 $smarty -> assign('name',$name);
 $smarty -> assign('date',$date);
 $smarty -> assign('countryLabel',$countryLabel);
 $smarty -> assign('country',$country);
 $smarty -> assign('songLabel',$songLabel);
 $smarty -> assign('song',$song);
 $smarty -> assign('shortArticle',$shortArticle);

 $smarty -> assign('img',$img);
 

 $smarty -> assign("countNews",$countNews);
 $smarty -> assign("count",$count);

 $conn->close();

 $smarty -> display("newsFile.tpl");


 }
?>
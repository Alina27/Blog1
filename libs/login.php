<?php
require 'D:\Wamp\wamp\www\BlogProject\libs\Smarty.class.php';

$smarty = new Smarty();

$smarty -> template_dir = 'D:\Wamp\wamp\www\BlogProject\libs\templates';
$smarty -> compile_dir = 'D:\Wamp\wamp\www\BlogProject\libs\templates_c';

$title = "Agent LogIn Page";
$home = "Home";
$news = "News";

$smarty -> assign("title",$title);
$smarty -> assign("home",$home);
$smarty -> assign("news",$news);

$servername = "localhost";
 $username = "root";
 $password = "Alina_DB";
 $dbname = "blog";
 
 $conn = new mysqli($servername, $username, $password,$dbname);

 if($conn->connect_error){
 	die("Connection failed: ".$conn ->connect_error);
 }
 
 session_start();
 if(count($_POST) > 0){
  
 $userName = $_POST['uname'];
 $userPass = $_POST['psw'];

 
$userName = stripslashes($userName);
$userPass = stripslashes($userPass);



 $qUerAct = "SELECT first_name, last_name
             FROM user 
             WHERE login = '".$userName."' AND pass = '".$userPass."';";

 $resUserAct = $conn -> query($qUerAct);

 //$count = $resUserAct -> num_rows;

 if($resUserAct -> num_rows > 0) {

    $_SESSION['userName'] = $userName;
    $_SESSION['userPass'] = $userPass;

 	header("Location: newsFile.php");
 }
 else {
 	echo "Wrong data";
 }

}

/*
session_start();
if(count($_POST) > 0){
	$userName = $_POST['uname'];
	$userPass = $_POST['psw'];

	$qUerAct = "SELECT first_name, last_name
                FROM user 
                WHERE login = '".$userName."' AND pass = '".$userPass."';"

    $resUserAct = $conn -> query($resUserAct);

    if($resUserAct -> num_rows > 0){
       session_register("$userName");
       $_SESSION['login_user'] = $userName;

       header("Location: login_success.php");
    }
    else {
    	echo "Sorry, whong data (:";
    }
} */

$smarty -> display("login.tpl");
?>
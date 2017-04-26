<?php

 session_start();
 if(!($_SESSION['userName'])){
 	header("main.php");
 }
 else {
    header("newsFile.php");	
 }

?>
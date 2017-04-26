<?php



 $servername = "localhost";
 $username = "root";
 $password = "Alina_DB";
 $dbname = "blog";
 
 $conn = new mysqli($servername, $username, $password,$dbname);

 if($conn->connect_error){
 	die("Connection failed: ".$conn ->connect_error);
 }

  session_start();
  $_SESSION['itemID'] = $_POST['delete'];

 //if($_POST['delete']){
    
    $delID = $_POST['delete_id'];

    $qDelItem = "DELETE FROM blog_item
              WHERE item_id = '".$delID."'; ";

    $deletedItem = $conn -> query($qDelItem);

 //}
 // header("Location: newsFile.php");


?>
<?php

require 'D:\Wamp\wamp\www\BlogProject\libs\Smarty.class.php';

$smarty = new Smarty();

$smarty -> template_dir = 'D:\Wamp\wamp\www\BlogProject\libs\templates';
$smarty -> compile_dir = 'D:\Wamp\wamp\www\BlogProject\libs\templates_c';


 $title = "Submit Form";
 $smarty -> assign("title",$title);

 $servername = "localhost";
 $username = "root";
 $password = "Alina_DB";
 $dbname = "blog";
 
 $conn = new mysqli($servername, $username, $password, $dbname);

 if($conn->connect_error){
 	die("Connection failed: ".$conn ->connect_error);
 }


/*
 session_start();
 if(count($_POST) > 0){

   $_SESSION['en_art_name'] = $_POST['name_en'];
   $_SESSION['en_art_country'] = $_POST['country_en'];
   $_SESSION['en_short_article'] = $_POST['shortArticle_en'];
   $_SESSION['en_full_article'] = $_POST['fullArticle_en'];

   $_SESSION['date'] = $_POST['date'];

   $_SESSION['uk_art_name'] = $_POST['name_uk'];
   $_SESSION['uk_art_country'] = $_POST['country_uk'];
   $_SESSION['uk_short_article'] = $_POST['shortArticle_uk'];
   $_SESSION['uk_full_article'] = $_POST['fullArticle_uk'];
} */


if(count($_POST) > 0){

 $name_en = $_POST['name_en'];
 $country_en = $_POST['country_en'];
 $song_title_en = $_POST['song_title_en'];
 $short_en = $_POST['shortArticle_en'];
 $full_en = $_POST['fullArticle_en'];

 $date = $_POST['date'];

 $name_uk = $_POST['name_uk'];
 $country_uk = $_POST['country_uk'];
 $song_title_uk = $_POST['song_title_uk'];
 $short_uk = $_POST['shortArticle_uk'];
 $full_uk = $_POST['fullArticle_uk'];



 $qNewNews = "INSERT INTO blog_item (name_uk, name_en, country_uk, country_en, short_uk, short_en, full_uk, full_en, 
 	                                 post_date, user_id, song_title_uk, song_title_en)
                VALUES('$name_uk', '$name_en', '$country_uk', '$country_en', '$short_uk', '$short_en', '$full_uk', '$full_en',
                                	'2017-04-19','1','$song_title_uk', '$song_title_en');";


 $newNews = $conn -> query($qNewNews); 


 $qItem = "SELECT item_id
           FROM blog_item
           WHERE name_en = '".$name_en."' AND country_en = '".$country_en."';";


 $item = $conn -> query($qItem);

 $qItemID = "SELECT MAX(item_id)
             FROM blog_item;";

 $resItemID = $conn -> query($qItemID);

 if($resItemID -> num_rows > 0){
 	while($row1 = $resItemID -> fetch_assoc()){
          $itemID = (INT)$row1['MAX(item_id)'];
 	}
 }
 

 if(!isset($_FILES['userfile'])) {
    echo '<p>Please select a file</p>';
}
else {
    try {
    
    $msg= upload();  //this will upload your image
       echo $msg;  //Message showing success or failure.
   }

    catch(Exception $e) {
    echo $e->getMessage();
    echo 'Sorry, could not upload file';
    }
}


 if($item -> num_rows > 0){
 		header("Location: newsFile.php");
 	}
 	else {
 		header("Location: form.php");
 	}
}


function upload() {
    
    global $conn;
	global $item;
	global $itemID;
    
    $maxsize = 1000000000000000; //set to approx 10 MB

    //check associated error code
    if($_FILES['userfile']['error']==UPLOAD_ERR_OK) {

        //check whether file is uploaded with HTTP POST
        if(is_uploaded_file($_FILES['userfile']['tmp_name'])) {    

            //checks size of uploaded image on server side
            if( $_FILES['userfile']['size'] < $maxsize) {  
  
               //checks whether uploaded file is of image type
              //if(strpos(mime_content_type($_FILES['userfile']['tmp_name']),"image")===0) {
                 $finfo = finfo_open(FILEINFO_MIME_TYPE);
                if(strpos(finfo_file($finfo, $_FILES['userfile']['tmp_name']),"image")===0) {    

                    // prepare the image for insertion
                    //$imgData = addslashes (file_get_contents($_FILES['userfile']['tmp_name']));
                    $imgData = addslashes(file_get_contents($_FILES['userfile']['tmp_name']));

                    // put the image in the db...
                    // database connection
                    //mysql_connect($host, $user, $pass) OR DIE (mysql_error());

                    // select the db
                    //mysql_select_db ($db) OR DIE ("Unable to select db".mysql_error());

                    // our sql query
                    $imageName = addslashes($_FILES['userfile']['name']);
                    $sql = "INSERT INTO image (name, img, item_id)
                            VALUES('{$imageName}', '{$imgData}', '$itemID');";

                    $sqlRes = $conn -> query($sql);  

                   // insert the image
                    $msg='<p>Image successfully saved in database </p>';
                }
                else
                    $msg="<p>Uploaded file is not an image.</p>";
            }
             else {
                // if the file is not less than the maximum allowed, print an error
                $msg='<div>File exceeds the Maximum File limit</div>
                <div>Maximum File limit is '.$maxsize.' bytes</div>
                <div>File '.$_FILES['userfile']['name'].' is '.$_FILES['userfile']['size'].
                ' bytes</div><hr />';
                }
        }
        else
            $msg="File not uploaded successfully.";

    }
    else {
        $msg = file_upload_error_message($_FILES['userfile']['error']);
    }
    return $msg;
    echo "$fileStr";
}


function file_upload_error_message($error_code) {
    switch ($error_code) {
        case UPLOAD_ERR_INI_SIZE:
            return 'The uploaded file exceeds the upload_max_filesize directive in php.ini';
        case UPLOAD_ERR_FORM_SIZE:
            return 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form';
        case UPLOAD_ERR_PARTIAL:
            return 'The uploaded file was only partially uploaded';
        case UPLOAD_ERR_NO_FILE:
            return 'No file was uploaded';
        case UPLOAD_ERR_NO_TMP_DIR:
            return 'Missing a temporary folder';
        case UPLOAD_ERR_CANT_WRITE:
            return 'Failed to write file to disk';
        case UPLOAD_ERR_EXTENSION:
            return 'File upload stopped by extension';
        default:
            return 'Unknown upload error';
    }
}



$conn->close();

$smarty -> display("form.tpl");


?>
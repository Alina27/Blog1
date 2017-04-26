<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>{$title}</title>
    <!-- Bootsrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- CSS <link rel="stylesheet" type="text/css" href="frontend/css/main.css"/> -->
    <link rel="stylesheet" type="text/css" href="frontend/css/main.css"/> 

    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.5.3/less.min.js"></script>
</head>

<body>
	
	
 <div class = "container"  id = "formCont">
	 <h4 id = "newNews"> New News </h4>
	                               
  <form id = "addForm" enctype="multipart/form-data"  action = "form.php" method = "POST">
	  
	  
	 </br>

	  <label id = "l1">English</label>
	  
	  </br>
	  </br>
	  
	 <div>
	  <label>Name</label>
	  <input type = "text" name = "name_en">
	 </div>
   
	   </br>
	 
	  <div>
	  <label>Country</label>
	  <input type = "text" name = "country_en">
	  </div>

             </br>

	  <div>
	  <label>Song</label>
	  <input type = "text" name = "song_title_en">
	 </div>
	         </br>
	<div>  
	  <label>Short Article</label>
	  <input type = "text" name = "shortArticle_en">
	</div> 

               </br>
	  
	<div>  
	  <label>Full Article</label>
	  <input type = "text" name = "fullArticle_en">
	</div> 

             </br>
	  
	 <div>  
	  <label>Date</label>
	  <input type = "date" name = "date">
	</div>  

         </br>
	
	</br>
	</br>
	  
	  <label id = "l2">Українська</label> 

   <div>
	  <label>Ім'я</label>
	  <input type = "text" name = "name_uk">
	 </div>

               </br>	   

	  <div>
	  <label>Країна</label>
	  <input type = "text" name = "country_uk">
	  </div>

              </br>

	  <div>
	  <label>Пісня</label>
	  <input type = "text" name = "song_title_uk">
	 </div>

              </br>
	  
	<div>  
	  <label>Коротка стаття</label>
	  <input type = "text" name = "shortArticle_uk">
	</div> 

                 </br>
	  
	<div>  
	  <label>Повна стаття</label>
	  <input type = "text" name = "fullArticle_uk">
	</div> 

                </br>  

    Select image to upload:
    <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
                 </br>
    <input name="userfile" type="file" id="fileToUpload" />
    <!-- uploaded_file-->
                     </br>
                     </br>
   <button type = "submit" name = "submit" id = "myBtn">Submit</button>
   <button type = "button" id = "returnBtn">Return</button>

 </form>
	 
 </div>

		
<!-- jQuery JavaScript -->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"> </script>
<!--Bootsrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!--Own JavaScript -->
<script type="text/javascript"  src="frontend/js/mainJS.php"> </script> 
</body>
</html>

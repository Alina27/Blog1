<?php
/* Smarty version 3.1.31, created on 2017-04-25 05:26:32
  from "D:\Wamp\wamp\www\BlogProject\libs\templates\form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58fec1e8249453_65673790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0822ad14659064afa1426cf9ba8e684da587e9d7' => 
    array (
      0 => 'D:\\Wamp\\wamp\\www\\BlogProject\\libs\\templates\\form.tpl',
      1 => 1493090703,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58fec1e8249453_65673790 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <!-- Bootsrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- CSS <link rel="stylesheet" type="text/css" href="frontend/css/main.css"/> -->
    <link rel="stylesheet" type="text/css" href="frontend/css/main.css"/> 

    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.5.3/less.min.js"><?php echo '</script'; ?>
>
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
<?php echo '<script'; ?>
 type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"> <?php echo '</script'; ?>
>
<!--Bootsrap JavaScript -->
<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!--Own JavaScript -->
<?php echo '<script'; ?>
 type="text/javascript"  src="frontend/js/mainJS.php"> <?php echo '</script'; ?>
> 
</body>
</html>
<?php }
}

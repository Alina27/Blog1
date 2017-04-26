<?php
/* Smarty version 3.1.31, created on 2017-04-25 07:12:15
  from "D:\Wamp\wamp\www\BlogProject\libs\templates\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58fedaaf4f47d5_71396714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c031c070996d97f15977bb64dc7c2bdecc20bf0c' => 
    array (
      0 => 'D:\\Wamp\\wamp\\www\\BlogProject\\libs\\templates\\main.tpl',
      1 => 1493097103,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58fedaaf4f47d5_71396714 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head lang="en">
   <!-- <meta charset="UTF-8"> -->
   <meta http-equiv = "Content-Type" content = "text/html; charset = UTF-8" />
   <meta name = "description" content = "">
   <meta name = "keywords" content = "">
    <title> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
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
	
	<div class = "container" id = "headPanel"></div>	
	
	<div class="menu-wrap">
            <nav class="menu">
               
            <ul class="clearfix">
                <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['home']->value;?>
</a></li>
                <li><a href="newsFile_ul.php"><?php echo $_smarty_tpl->tpl_vars['news']->value;?>
</a></li>
                <li><a href="login.php"><?php echo $_smarty_tpl->tpl_vars['logIn']->value;?>
</a></li>

  <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['language']->value;?>
<span class="arrow">&#9660;</span></a>
            <ul class="sub-menu">
            	          
                <li><a href="main.php?lang=en">English</a></li>
                <li><a href="main.php?lang=uk">Ukrainian</a></li>	

            </ul>   
  </li>
             </ul>
            </nav>
     </div>

     <img id  = "mainImg" src = "frontend/img/esc.png"/>

	<!--
<div class = "container" id = "first">
	
  <div class = "row">
 
	  <div class="col-sm-6 col-md-4">
		  <div class="thumbnail">
			  <img src="esb.JPG">
			  <div class="caption">
				  <h3>Name <span>Otorvald</span> </h3>
				  <h4>Country <span>Ukraine</span> </h4>
				  <h4>Song <span>Time</span> </h4>
				  <p>
				  Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
				  </p>
				  
				  <p>
				  <a href="#" class="btn btn-default">Read</a>
				  </p>
				  
			  </div>
		  </div>
	  </div> 
	  
	  <div class="col-sm-6 col-md-4">
		  <div class="thumbnail">
			  <img src="esb.JPG">
			  <div class="caption">
				  <h3>Name</h3>
				  <h4>Country</h4>
				  <h4>Song</h4>
				  <p>
				  Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
				  </p>
				  
				  <p>
				  <a href="#" class="btn btn-default">Read</a>
				  </p>
				  
			  </div>
		  </div>
	  </div> 
	  
	  <div class="col-sm-6 col-md-4">
		  <div class="thumbnail">
			  <img src="esb.JPG">
			  <div class="caption">
				  <h3>News 1</h3>
				  <h4>Country</h4>
				  <h4>Song</h4>
				  <p>
				  Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
				  </p>
				  
				  <p>
				  <a href="#" class="btn btn-default">Read</a>
				  </p>
				  
			  </div>
		  </div>
	  </div> 
	  
  </div>	 
		
</div> -->
	
		
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

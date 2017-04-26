<?php
/* Smarty version 3.1.31, created on 2017-04-23 14:06:05
  from "D:\Wamp\wamp\www\BlogProject\libs\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58fc98ad86ac01_87976673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '214975029bdb7c49725a33985c649d1c3ca9ae04' => 
    array (
      0 => 'D:\\Wamp\\wamp\\www\\BlogProject\\libs\\templates\\login.tpl',
      1 => 1492946308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58fc98ad86ac01_87976673 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head lang="en">
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
                   <li> <a href="main.php"><?php echo $_smarty_tpl->tpl_vars['home']->value;?>
</a></li> 
                   <li> <a href="newsFile_ul.php"><?php echo $_smarty_tpl->tpl_vars['news']->value;?>
</a></li> 
              </ul>
            </nav>
         </div>
		
		
		<form id = "login_form" action = "login.php" method = "POST">
			<!--
			<div class = "imgcontainer">
			   <img src = "frontend/img/img_avatar2.png" alt="Avatar" class="avatar"/>
			</div> -->
			
			<div class = "containerForm" id = "logCont">
				<label><b>Username</b></label>
				<input type = "text" placeholder="Enter Username" name = "uname" required id = "userInput">
				
				<label><b>Password</b></label>
				<input type = "password" placeholder="Enter Password" name = "psw" required id = "passInput">
				
				<button type = "submit" id = "loginButton">Login</button>
				
			</div>	
			
		</form>
			
		
	
		
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

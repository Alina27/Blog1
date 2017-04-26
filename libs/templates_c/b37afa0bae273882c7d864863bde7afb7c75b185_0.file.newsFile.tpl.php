<?php
/* Smarty version 3.1.31, created on 2017-04-25 07:06:10
  from "D:\Wamp\wamp\www\BlogProject\libs\templates\newsFile.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58fed942a05a12_61200382',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b37afa0bae273882c7d864863bde7afb7c75b185' => 
    array (
      0 => 'D:\\Wamp\\wamp\\www\\BlogProject\\libs\\templates\\newsFile.tpl',
      1 => 1493096766,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58fed942a05a12_61200382 (Smarty_Internal_Template $_smarty_tpl) {
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
              <!--  <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['home']->value;?>
</a></li> -->
                <li><a href="logout.php"><?php echo $_smarty_tpl->tpl_vars['logOut']->value;?>
</a></li>
                <li><a href="form.php"><?php echo $_smarty_tpl->tpl_vars['addNews']->value;?>
</a></li>

    <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['language']->value;?>
<span class="arrow">&#9660;</span></a>
            <ul class="sub-menu">
            	          
                <li><a href="newsFile.php?lang=en">English</a></li>
                <li><a href="newsFile.php?lang=uk">Ukrainian</a></li>	

            </ul>   
    </li>
             </ul>
            </nav>
     </div>


<div class = "container" id = "first">

	<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['countNews']->value-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['countNews']->value-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>

		<div class="col-sm-6 col-md-4">
		  <div class="thumbnail">
		  	    
		  	    <?php echo $_smarty_tpl->tpl_vars['img']->value[$_smarty_tpl->tpl_vars['i']->value];?>

		  	    
			  <div class="caption">
				  <h6><?php echo $_smarty_tpl->tpl_vars['date']->value[$_smarty_tpl->tpl_vars['i']->value];?>
</h6>
				  <h3><?php echo $_smarty_tpl->tpl_vars['name']->value[$_smarty_tpl->tpl_vars['i']->value];?>
</h3>
				  <h4><?php echo $_smarty_tpl->tpl_vars['countryLabel']->value;?>
 <span><?php echo $_smarty_tpl->tpl_vars['country']->value[$_smarty_tpl->tpl_vars['i']->value];?>
</span> </h4>
				  <h4><?php echo $_smarty_tpl->tpl_vars['songLabel']->value;?>
 <span><?php echo $_smarty_tpl->tpl_vars['song']->value[$_smarty_tpl->tpl_vars['i']->value];?>
</span> </h4>
				  <p> <?php echo $_smarty_tpl->tpl_vars['shortArticle']->value[$_smarty_tpl->tpl_vars['i']->value];?>
 </p>

                  <p>
				  <!-- <a href="sepItem.php" class="btn btn-success" id = "readBtn" value = <?php echo $_smarty_tpl->tpl_vars['itemID']->value[$_smarty_tpl->tpl_vars['i']->value];?>
>Read</a> 
                   <a href="#" class="btn btn-warning">Change</a>
                   <a href="#" class="btn btn-danger">Delete</a>
				   -->
				  
	<form action = "newsFile.php" method= "POST"> 
         <span> <button type="submit" name = "read" class="btn btn-success" id = "read" value=<?php echo $_smarty_tpl->tpl_vars['itemID']->value[$_smarty_tpl->tpl_vars['i']->value];?>
><?php echo $_smarty_tpl->tpl_vars['readArt']->value;?>
</button></span>
         <span><button type="button" class="btn btn-danger deleteBtn" id = "<?php echo $_smarty_tpl->tpl_vars['itemID']->value[$_smarty_tpl->tpl_vars['i']->value];?>
" ><?php echo $_smarty_tpl->tpl_vars['deleteArt']->value;?>
</button></span>
    </form>
             
				  </p>

			  </div>
		  </div>
	  </div>
   

	<?php }
}
?>

		
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

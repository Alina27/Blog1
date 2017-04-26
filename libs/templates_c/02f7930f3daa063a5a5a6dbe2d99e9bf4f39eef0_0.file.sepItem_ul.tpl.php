<?php
/* Smarty version 3.1.31, created on 2017-04-25 07:15:19
  from "D:\Wamp\wamp\www\BlogProject\libs\templates\sepItem_ul.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58fedb675553b5_71676017',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02f7930f3daa063a5a5a6dbe2d99e9bf4f39eef0' => 
    array (
      0 => 'D:\\Wamp\\wamp\\www\\BlogProject\\libs\\templates\\sepItem_ul.tpl',
      1 => 1493096561,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58fedb675553b5_71676017 (Smarty_Internal_Template $_smarty_tpl) {
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
                <li><a href="newsFile_ul.php"><?php echo $_smarty_tpl->tpl_vars['news']->value;?>
</a></li>
                <li><a href="login.php"><?php echo $_smarty_tpl->tpl_vars['logIn']->value;?>
</a></li>
  <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['language']->value;?>
<span class="arrow">&#9660;</span></a>
            <ul class="sub-menu">
                <li><a href="sepItem_ul.php?lang=en">English</a></li>
                <li><a href="sepItem_ul.php?lang=uk">Ukrainian</a></li>
            </ul>   
  </li>
             </ul>
            </nav>
     </div>
    
<div class = "container" id = "newsBox">
     <div class = "container" id = "newsBox"> 

       <?php echo $_smarty_tpl->tpl_vars['img']->value;?>

     
<div id = "info">
  <h6 id = "post_date"><?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</h6>
      <h2 id = "n"><?php echo $_smarty_tpl->tpl_vars['sepName']->value;?>
</h2>
      <h3 id = "k"><?php echo $_smarty_tpl->tpl_vars['country']->value;?>
</3>
      <h3 id = "s"><?php echo $_smarty_tpl->tpl_vars['song']->value;?>
</3>
</div>
         
 <p id = "mainPar"><?php echo $_smarty_tpl->tpl_vars['fullArticle']->value;?>
 </p>

  
            
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

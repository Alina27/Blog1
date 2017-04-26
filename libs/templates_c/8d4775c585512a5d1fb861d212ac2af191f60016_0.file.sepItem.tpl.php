<?php
/* Smarty version 3.1.31, created on 2017-04-25 07:01:53
  from "D:\Wamp\wamp\www\BlogProject\libs\templates\sepItem.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58fed84118a643_36738496',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d4775c585512a5d1fb861d212ac2af191f60016' => 
    array (
      0 => 'D:\\Wamp\\wamp\\www\\BlogProject\\libs\\templates\\sepItem.tpl',
      1 => 1493096498,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58fed84118a643_36738496 (Smarty_Internal_Template $_smarty_tpl) {
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
                <li><a href="newsFile.php"><?php echo $_smarty_tpl->tpl_vars['news']->value;?>
</a></li>
                <li><a href="logout.php"><?php echo $_smarty_tpl->tpl_vars['logOut']->value;?>
</a></li>
  <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['language']->value;?>
<span class="arrow">&#9660;</span></a>
            <ul class="sub-menu">
                <li><a href="sepItem.php?lang=en">English</a></li>
                <li><a href="sepItem.php?lang=uk">Ukrainian</a></li>
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

    <!--
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  
            <ol class="left carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        </ol>
          
        <div class="carousel-inner">
            <div class="item active">
                <?php echo $_smarty_tpl->tpl_vars['img']->value;?>

            </div>
        
        </div>    
        
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
  
    </div>
    
    <h6 id = "date"><?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</h6>
    <label id = "leb1"><h2 id = "name"><?php echo $_smarty_tpl->tpl_vars['sepName']->value;?>
</h2></label>
    <label><h2 id = "country"><?php echo $_smarty_tpl->tpl_vars['country']->value;?>
</h2></label>
    
    <p id = "mainText"> <?php echo $_smarty_tpl->tpl_vars['fullArticle']->value;?>
 </p>
     -->
            
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

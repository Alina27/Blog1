<!DOCTYPE html>
<html>
<head lang="en">
     <meta http-equiv = "Content-Type" content = "text/html; charset = UTF-8" />
     <meta name = "description" content = "">
     <meta name = "keywords" content = "">
    
    <title> {$title} </title>
    <!-- Bootsrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- CSS <link rel="stylesheet" type="text/css" href="frontend/css/main.css"/> -->
    <link rel="stylesheet" type="text/css" href="frontend/css/main.css"/> 

    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.5.3/less.min.js"></script>
</head>
<body>
	

	    <div class = "container" id = "headPanel"></div>	
	
	      <div class="menu-wrap">
              <nav class="menu">
               
              <ul class="clearfix">
                   <li> <a href="main.php">{$home}</a></li> 
                   <li> <a href="newsFile_ul.php">{$news}</a></li> 
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
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"> </script>
<!--Bootsrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!--Own JavaScript -->
<script type="text/javascript"  src="frontend/js/mainJS.php"> </script>
</body>
</html>

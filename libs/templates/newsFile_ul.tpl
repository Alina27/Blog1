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
                <li><a href="main.php">{$home}</a></li>
                <li><a href="login.php">{$logIn}</a></li>

    <li><a href="#">{$language}<span class="arrow">&#9660;</span></a>
            <ul class="sub-menu">
            	          
                <li><a href="newsFile_ul.php?lang=en">English</a></li>
                <li><a href="newsFile_ul.php?lang=uk">Ukrainian</a></li>	

            </ul>   
    </li>
             </ul>
            </nav>
     </div>


<div class = "container" id = "first">

	{for $i = 0 to $countNews-1}

		<div class="col-sm-6 col-md-4">
		  <div class="thumbnail">
		  	    
		  	    {$img[$i]}
		  	    
			  <div class="caption">
				  <h6>{$date[$i]}</h6>
				  <h3>{$name[$i]}</h3>
				  <h4>{$countryLabel} <span>{$country[$i]}</span> </h4>
				  <h4>{$songLabel} <span>{$song[$i]}</span> </h4>
				  <p> {$shortArticle[$i]} </p>

   <form action = "newsFile_ul.php" method= "POST"> 
      <span> <button type="submit" name = "read" id = "read" class="btn btn-success" value={$itemID[$i]}>{$readArt}</button></span>
    </form>

			  </div>
		  </div>
	  </div>
   
	{/for}
		
</div> 
	
		
<!-- jQuery JavaScript -->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"> </script>
<!--Bootsrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!--Own JavaScript -->
<script type="text/javascript"  src="frontend/js/mainJS.php"> </script> 
</body>
</html>

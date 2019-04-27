<?php
/*
  include 'dbinfo.php';
//always start the session before anything else!!!!!! 
session_start();


    $link = mysqli_connect($host, $user, $pass) or die("Unable to connect");
    mysqli_select_db($link, $database) or die("Unable to select database");


if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO visitor (ip)
VALUES ('192.168.1.1')";

if (mysqli_query($link, $sql)) {
    
} else {
    echo "<script>alert('Error !')</script>";
    
} 

*/
?> 
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/slider.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>


<div class="header" style="background-image: url(images/bghf.jpeg)" >
 <a href="#default" class="logo">LJ<br><br>Illustration & Design</a>
    
  <div class="header-right">
    <a class="active" href="index.php">Home</a>
	<a href="about.html">About Me</a>

	 
	<a href="illustrations.html">Illustration</a>
	<a href="designs.html">Design</a>
	 <div class="dropdown">
  <button class="dropbtn">Workshops</button>
  <div class="dropdown-content">
  <a href="workshops.php"> Workshops</a>
  <a href="gallery.html">Gallery</a>
   <a href="booking.php">Bookings</a>

  </div>
</div> 
    
    <a href="contact.php">Contact Me</a>
    
  </div>
</div>




  
 <div class="slider-wrapper vertical-center">

		<ul class="slider">
			<li class="slide active"><img src="images/1.jpg" /></li>
			<li class="slide"><img src="images/2.jpg" /></li>
			<li class="slide"><img src="images/3.jpg" /></li>
			<li class="slide"><img src="images/4.jpg" /></li>
			<li class="slide"><img src="images/5.jpg" /></li>
			<li class="slide"><img src="images/6.jpg" /></li>
		</ul>

		<div class="arrow arrow-left">
			<span class="icon-left-open"></span>
		</div>

		<div class="arrow arrow-right">
			<span class="icon-right-open"></span>
		</div>		

	</div>	


	



<section class="thumbnail_section">

  <div class="col-md-4 col-sm-4 col-xs-12">
    <div class="card">
	 <div class = "background">
     <img class = "blur" src = "images/design1.jpg"/> 
     <div class = "foreground">
       <h1>Design</h1> 
     </div> 
  </div> 
	 

	
  </div>
  <div class="w3-container" id="about">
  <div class="w3-content" style="max-width:80% pading=100px ;font-family:Gabriolas ; font-size=200px">

	
    <p>For original design solutions ranging from design concepts and ideas to detailed interior planning, colour schemes and set design. 
Design elements detailed including fabric and wallpaper design.
</p>
   
</div></div>
  </div>
  
  <div class="col-md-4 col-sm-4 col-xs-12">
    <div class="card">
	 <div class = "background">
     <img class = "blur" src = "images/illustration2.jpg"/> 
     <div class = "foreground">
       <h1>Illustration</h1> 
     </div> 
  </div> 
	 

  </div>
  
	<div class="w3-container" id="about">
  <div class="w3-content" style="max-width:80% pading=100px ;font-family:Gabriolas ; font-size=35px">
	<p>L.J specializes in hand drawn and rendered illustrations with custom designs for each project. 
A variety of options are available from conceptual sketches to completed pen and ink or coloured renderings.</p>
   
</div></div>
  </div>
  
  
   <div class="col-md-4 col-sm-4 col-xs-12">
    <div class="card">
	 <div class = "background">
     <img class = "blur" src = "images/3.jpg"/> 
     <div class = "foreground">
       <h1>Children's  Workshops</h1> 
     </div> 
  </div> 
	 

	
  </div>
  <div class="w3-container" id="about">
  <div class="w3-content" style="max-width:80% pading=100px ;font-family:Gabriolas ; font-size=35px">
	 <p>Fun and creative childrens workshops catering to all skill levels in small groups.
Children will be encouraged in a safe and nurturing environment whilst exploring their imaginations.
</p>
   
</div></div>
  </div>
  
   
</section>


<!-- About Container 
<div class="w3-container" id="about">
  <div class="w3-content" style="max-width:80% pading=100px">
    <h4 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">ABOUT THIS ORGENIZATION</span></h4>
    <p>The workshops are for are enthusiasts who are interested in the field of arts.</p>
    <p>In addition to our full espresso and brew bar menu, we serve fresh made-to-order breakfast and lunch sandwiches, as well as a selection of sides and salads and other good stuff.</p>
    <div class="w3-panel w3-leftbar w3-light-grey">
      <p><i>"Use products from nature for what it's worth - but never too early, nor too late." Fresh is the new sweet.</i></p>
      <p>Art, Craft and Owner: Liam Brown</p>
    </div>

    <p><strong>Opening hours:</strong> everyday from 6am to 5pm.</p>
    <p><strong>Address:</strong> 15 Abcd street, 5015, NY</p>
  </div>
</div>
-->
  <!--<div class="row">
    <div class="column">
      <img class="demo cursor" src="1.jpg" style="width:95%" onclick="currentSlide(1)">
    </div>
    <div class="column">
      <img class="demo cursor" src="2.jpg" style="width:95%" onclick="currentSlide(2)">
    </div>
    <div class="column">
      <img class="demo cursor" src="3.jpg" style="width:95%" onclick="currentSlide(3)">
    </div>
    <div class="column">
      <img class="demo cursor" src="4.jpg" style="width:95%" onclick="currentSlide(4)">
    </div>
    <div class="column">
      <img class="demo cursor" src="5.jpg" style="width:95%" onclick="currentSlide(5)">
    </div>    
    <div class="column">
      <img class="demo cursor" src="6.jpg" style="width:95%" onclick="currentSlide(6)">
    </div>
  </div>-->

<!--<div class="rows">
  <div class="columns" style="background-color:#FCF3CF  ">
    <h2>Quick Links</h2>
				<ul class="footer_grid_list">
					<li class="fa fa-angle-right" aria-hidden="true">
						<a href="index.html">Home</a>
					</li>
					</br>
					<li class="fa fa-angle-right" aria-hidden="true">
						<a href="about.html">Know Me</a>
					</li>
					</br>
					<li class="fa fa-angle-right" aria-hidden="true">
						<a href="gallery.html">Gallery</a>
					</li>
					</br>
					<li class="fa fa-angle-right" aria-hidden="true">
						<a href="contact.html">Contact</a>
					</li>
					</br>
                                        <li class="fa fa-angle-right" aria-hidden="true">
						<a href="admin.html">Admin Login</a>
					</li>

				</ul>
  </div>
  <div class="columns" style="background-color:#FCF3CF  ">
    <h2>About Website</h2>
    <p>The workshops are for are enthusiasts who are interested in the field of arts.</p>
  </div>
  <div class="columns" style="background-color:#FCF3CF  ">
    <h2>Follow Us</h2>
	 <p>Follow us on facebook,instagram and twitter</p>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="wrapper">
   <a href="https://www.facebook.com/manjinderbhullar751"><i class="fa fa-3x fa-instagram"></i></a>
   <a href="https://www.facebook.com/manjinderbhullar751/about?lst=100003009039648%3A100003009039648%3A1533870940"><i class="fa fa-3x fa-facebook-square"></i></a>
   <a  href="your_url_here"><i class="fa fa-3x fa-twitter-square"></i></a>
</div>
   
  </div>
</div>-->
   
  
   <footer>
 
  <div class="footer" >
  
		
 <div class="caption-container3" style="background-image: url(images/bghf.jpeg)">
   <p>© 2018 <a href="privacy.html">Privacy Policy.</a> All rights reserved | Design by <a href="index.php">Team05</a></p>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="wrapper" >
   <a href="https://www.facebook.com/manjinderbhullar751"><i class="fa fa-3x fa-instagram"></i></a>
   <a href="https://www.facebook.com/manjinderbhullar751/about?lst=100003009039648%3A100003009039648%3A1533870940"><i class="fa fa-3x fa-facebook-square"></i></a>
   <a  href="your_url_here"><i class="fa fa-3x fa-twitter-square"></i></a>
</div>
  </div>
    

 

</div>

</footer>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="js/slider.js" type="text/javascript"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
</body>
</html>

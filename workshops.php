<?php
include 'dbinfo.php';
//always start the session before anything else!!!!!!
//session_start();


    $link = mysqli_connect($host, $user, $pass) or die("Unable to connect");
    mysqli_select_db($link, $database) or die("Unable to select database");



?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/slider.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

</head>
<body>
<div class="header" style="background-image: url(images/bghf.jpeg)" >
 <a href="#default" class="logo">LJ<br><br>Illustration & Design</a>
    
  <div class="header-right">
    <a class="active" href="index.php">Home</a>
	<a href="about.html">About Me</a>

	 
	<a href="illustrations.html">Illustrations</a>
	<a href="designs.html">Designs</a>
	 <div class="dropdown">
  <button class="dropbtn"> <a class="active" > Workshops </a> </button>
  <div class="dropdown-content">
  <button class="dropbtn"> <a class="active" > Workshops </a> </button>
  <a href="gallery.html">Gallery</a>
   <a href="booking.php">Bookings</a>

  </div>
</div>
    
    <a href="contact.php">Contact Me</a>
    
  </div>
</div>


<center>
<div class="caption-container2 about_heading">
    <h1 style="font-family:kunstler;font-size:55px">Workshops</h1>
	 
  </div>
<!-- About Container -->
<div class="container" id="about">
  <div class="w3-content" style="max-width:80% pading=100px">
  


<?php
  $sql_query = "select * From workshop";
                    	$result = mysqli_query($link, $sql_query);

                    	if (mysqli_num_rows($result) > 0) {

                     		 while($row = mysqli_fetch_array($result)) {
                              echo'<div class="container5 grid_workshop" style="width:80% ;height:auto " >
                              <div>
                              <img src="./admin/'.$row['pic_url'].'" alt="workshop image" style="width:220px ;height:220px">
                              </div>
                              <div>
                              <p><div align="left">EVENT NAME : '.$row['title'].'</div><div align="right">  EVENT DATE : '.$row['event_date'].'</div></p>
                              
                             
                              
                              <p align="right"> PRICE : '.$row['price'].'</p>
                              <p align="right"> DURATION : '.$row['duration'].' Min</p>
							  <p align="right"> AGE GROUP : '.$row['age_group'].'</p>
							  <p align="left"> DESCRIPTION : '.$row['work_desc'].'</p>
                              </div>
                              </div>';
                             }
                        } else {
                       echo "0 Workshops";
                        }

                            ?>
			

  </div>
</div>


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

   
</body>
</html>

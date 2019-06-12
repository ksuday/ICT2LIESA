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
 <a href="index.php" class="logo">LJ<br><br>Illustration & Design</a>
    
  <div class="header-right">
    <a  href="index.php">Home</a>
	<a href="about.html">About Me</a>

	 
	<a href="illustrations.php">Illustrations</a>
	<a   href="designs.php">Designs</a>
	 <div class="dropdown">
  <button class="dropbtn"><a class="active">Workshops</a></button>
  <div class="dropdown-content">
  <a href="workshops.php"> Workshops</a>
   <a href="booking.php">Bookings</a>

  </div>
</div>
    
    <a href="contact.php">Contact Me</a>
    
  </div>
</div>


<center>
<div class="caption-container2 work_hd" style=" background-color: white; color: black">
    <h1>Workshops</h1>
	 
  </div>
<!-- About Container -->
<div class="worshop_section" id="about">
  <div class="w3-content" style="max-width:80% pading=100px">
  


<?php
  $sql_query = "select * From workshop";
                    	$result = mysqli_query($link, $sql_query);

                    	if (mysqli_num_rows($result) > 0) {

                     		 while($row = mysqli_fetch_array($result)) {
                              echo'<div class="container5 grid_workshop" style="width:70% ;height:auto " >
                              <div>
                              <img src="./admin/'.$row['pic_url'].'" alt="workshop image" style="width:220px ;height:220px">
                              </div>
                              <div>
                              <div align="right" class="event_name">EVENT NAME : '.$row['title'].'</div><div align="right" class="event_date">  EVENT DATE : '.$row['event_date'].'</div>
                              
                             
                              
                              <p align="right" class="event_date"> PRICE : '.$row['price'].'</p>
                              <p align="right" class="event_date"> DURATION : '.$row['duration'].' Min</p>
							  <p align="right" class="event_date"> AGE GROUP : '.$row['age_group'].'</p>
							  <p align="right" class="event_date"> DESCRIPTION : '.$row['work_desc'].'</p>
							  <button class="booknow_btn" style="margin:5px;"><a  href="booking.php">Book Now</a></button>
                              <button class="booknow_btn" style="margin:5px;"><a href="https://www.eventbrite.com/">Book on Eventbrite</a></button>
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
	    <p>&copy; 2019 <a href="privacy.html">Privacy Policy.</a> All rights reserved</p>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<div class="wrapper" >
		    <a href="https://www.instagram.com" target="_blank"><i class="fa fa-3x fa-instagram"></i></a>
		    <a href="https://www.facebook.com" target="_blank"><i class="fa fa-3x fa-facebook-square"></i></a>
		    <a  href="https://au.linkedin.com/" target="_blank"><i class="fa fa-3x  fa-linkedin"></i></a>
		    <a  href="https://www.pinterest.com" target="_blank"><i class="fa fa-3x  fa-pinterest"></i></a>
		</div>
		<div class="footer" style="font-size:25px;" >
		    <a  href="admin/index.php">Admin Login</a>
		</div>


	    </div>
	</div>
</footer>

   
</body>
</html>

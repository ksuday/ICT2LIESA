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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href='https://fonts.googleapis.com/css?family=Cinzel:400,700,900' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Kaushan+Script:400' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">

</head>
<body>
<div class="header" style="background-image: url(images/bghf.jpeg)" >
 <a href="index.php" class="logo">LJ<br><br>Illustration & Design</a>
    
  <div class="header-right">
    <a  href="index.php">Home</a>
	<a href="about.html">About Me</a>

	 
	<a href="illustrations.php">Illustrations</a>
	<a  class="active" href="designs.pho">Designs</a>
	 <div class="dropdown">
  <button class="dropbtn">Workshops</button>
  <div class="dropdown-content">
  <a href="workshops.php"> Workshops</a>
   <a href="booking.php">Bookings</a>

  </div>
</div>
    
    <a href="contact.php">Contact Me</a>
    
  </div>
</div>

<!-- <div class="caption-container2" style=" background-color:white; color: black">
    <H3> <p id="caption"> <H1 style="font-family:KUNSTLER ; font-size:60px"> Design</H1></p></H3>
	
	<p style="font-family:gabriolas; font-size:35px"> Interior Design&#9679;Set Design&#9679;Concepts&#9679;Color Schemes&#9679;Fabric Design</p>
  </div> -->
  
  <div class="caption-container2 illustration_hd" style=" background-color: white; color: black">
    <h1 id="caption">Design</h1>

	<ul class="row category_row nav-tabs">
		<li class="col-md-2 col-sm-2 col-xs-12"><span class="cat_hd" style=" background-color: #3c763d;">CATEGORIES <i class="fa fa-hand-o-right" aria-hidden="true"></i></a></li>
		<li class="col-md-2 col-sm-2 col-xs-12 border_right active"><a class="cat_list" data-toggle="tab" href="#interior_design">Interior Design</a></li>
		<li class="col-md-2 col-sm-2 col-xs-12 border_right"><a class="cat_list" data-toggle="tab" href="#set_design">Set Design</a></li>
		<li class="col-md-2 col-sm-2 col-xs-12 border_right"><a class="cat_list" data-toggle="tab" href="#concepts">Concepts</a></li>
		<li class="col-md-2 col-sm-2 col-xs-12 border_right"><a class="cat_list" data-toggle="tab" href="#color_schemes">Color Schemes</a></li>
		<li class="col-md-2 col-sm-2 col-xs-12"><a class="cat_list" data-toggle="tab" href="#fabric_design">Fabric Design</a></li>
	</ul>
  </div>
<!-- About Container -->
<div class="design_section" id="about" style=" background-color: white; color: black">
  <div class="w3-content" >



<div class="tab-content">
  <div id="interior_design" class="tab-pane fade in active">
    <div class="tz-gallery">
   	<?php
  $sql_query = "select * From design where type='Interior Design'";
                    	$result = mysqli_query($link, $sql_query);

                    	if (mysqli_num_rows($result) > 0) {

                     		 while($row = mysqli_fetch_array($result)) {

			echo '<div class="col-md-4 col-sm-4 col-s-12">
				<a class="lightbox card" href="images/'.$row['pic_url'].'" alt="Avatar">
					<img src="images/'.$row['pic_url'].'" alt="Avatar">
				</a>
			</div>';
			
			 }
                        } else {
                       echo "0 Workshops";
                        }
?>
    
</div>
  </div>
  <div id="set_design" class="tab-pane fade">
    <div class="tz-gallery">
	 	<?php
  $sql_query = "select * From design where type='Set Design'";
                    	$result = mysqli_query($link, $sql_query);

                    	if (mysqli_num_rows($result) > 0) {

                     		 while($row = mysqli_fetch_array($result)) {

			echo '<div class="col-md-4 col-sm-4 col-s-12">
				<a class="lightbox card" href="images/'.$row['pic_url'].'" alt="Avatar">
					<img src="images/'.$row['pic_url'].'" alt="Avatar">
				</a>
			</div>';
			
			 }
                        } else {
                       echo "0 Workshops";
                        }
?>
	
</div>
  </div>
  <div id="concepts" class="tab-pane fade">
    <div class="tz-gallery">
	 	<?php
  $sql_query = "select * From design where type='Concepts'";
                    	$result = mysqli_query($link, $sql_query);

                    	if (mysqli_num_rows($result) > 0) {

                     		 while($row = mysqli_fetch_array($result)) {

			echo '<div class="col-md-4 col-sm-4 col-s-12">
				<a class="lightbox card" href="images/'.$row['pic_url'].'" alt="Avatar">
					<img src="images/'.$row['pic_url'].'" alt="Avatar">
				</a>
			</div>';
			
			 }
                        } else {
                       echo "0 Workshops";
                        }
?>
</div>
  </div>
  <div id="color_schemes" class="tab-pane fade">
<div class="tz-gallery">

    	<?php
  $sql_query = "select * From design where type='Color Schemes'";
                    	$result = mysqli_query($link, $sql_query);

                    	if (mysqli_num_rows($result) > 0) {

                     		 while($row = mysqli_fetch_array($result)) {

			echo '<div class="col-md-4 col-sm-4 col-s-12">
				<a class="lightbox card" href="images/'.$row['pic_url'].'" alt="Avatar">
					<img src="images/'.$row['pic_url'].'" alt="Avatar">
				</a>
			</div>';
			
			 }
                        } else {
                       echo "0 Workshops";
                        }
?>
	
</div>
  </div>
    <div id="fabric_design" class="tab-pane fade">
    <div class="tz-gallery">
   	<?php
  $sql_query = "select * From design where type='Fabric Design'";
                    	$result = mysqli_query($link, $sql_query);

                    	if (mysqli_num_rows($result) > 0) {

                     		 while($row = mysqli_fetch_array($result)) {

			echo '<div class="col-md-4 col-sm-4 col-s-12">
				<a class="lightbox card" href="images/'.$row['pic_url'].'" alt="Avatar">
					<img src="images/'.$row['pic_url'].'" alt="Avatar">
				</a>
			</div>';
			
			 }
                        } else {
                       echo "0 Workshops";
                        }
?>
	
</div>
  </div>

</div>








	

  </div>
   </div>
   <footer>
 
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

     <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
</body>
</html>


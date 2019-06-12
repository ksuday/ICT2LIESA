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

	 
	<a class="active" href="illustrations.php">Illustrations</a>
	<a href="designs.php">Designs</a>
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

<div class="caption-container2 illustration_hd" style=" background-color: white; color: black">
    <h1 id="caption">Illustrations</h1>

	<ul class="row category_row nav-tabs" style=" background-color: white; color: black">
		<li class="col-md-2 col-sm-2 col-xs-12"><span class="cat_hd" style=" background-color: #3c763d;">CATEGORIES <i class="fa fa-hand-o-right" aria-hidden="true"></i></a></li>
		<li class="col-md-2 col-sm-2 col-xs-12 border_right active"><a class="cat_list" data-toggle="tab" href="#book_illutrations">Book Illustrations</a></li>
		<li class="col-md-2 col-sm-2 col-xs-12 border_right" ><a class="cat_list" data-toggle="tab" href="#child_book_illustrations">Childrens Book Illustrations</a></li>
		<li class="col-md-2 col-sm-2 col-xs-12 border_right"><a class="cat_list" data-toggle="tab" href="#botanical_illustrations">Botanical Illustration</a></li>
		<li class="col-md-2 col-sm-2 col-xs-12 border_right "><a class="cat_list" data-toggle="tab" href="#fashion_iluustraions">Fashion Illustration</a></li>
		<li class="col-md-2 col-sm-2 col-xs-12"><a class="cat_list" data-toggle="tab" href="#catalogue_illustraions">Catalogue Illustration</a></li>
	</ul>
  </div>
<!-- About Container -->
<div class="illustration_section" style=" background-color:white"  id="about">

  <div class="w3-content" >
  
  <div class="tab-content">
	  <div id="book_illutrations" class="tab-pane fade in active">
		<div class="tz-gallery">
		<?php
  $sql_query = "select * From illustrations where type='Book Illustration'";
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
	  
	   <div id="child_book_illustrations" class="tab-pane fade">
	    <div class="tz-gallery">
	    <?php
  $sql_query = "select * From illustrations where type='Childrens Book Illustrations'";
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
	   
	
	   <div id="botanical_illustrations" class="tab-pane fade">
	    <div class="tz-gallery">
			 <?php
  $sql_query = "select * From illustrations where type='Botanical Illustrations'";
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
	   
	    <div id="fashion_iluustraions" class="tab-pane fade">
		<div class="tz-gallery">
				<?php
  $sql_query = "select * From illustrations where type='Fashion Illustrations'";
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
		
	   <div id="catalogue_illustraions" class="tab-pane fade">
		<div class="tz-gallery">
						<?php
  $sql_query = "select * From illustrations where type='Catalogue Illustrations'";
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


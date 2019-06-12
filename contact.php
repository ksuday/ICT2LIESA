<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/slider.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>
<div class="header" style="background-image: url(images/bghf.jpeg)" >
 <a href="index.php" class="logo">LJ<br><br>Illustration & Design</a>
    
  <div class="header-right">
    <a  href="index.php">Home</a>
	<a href="about.html">About Me</a>

	 
	<a href="illustrations.php">Illustrations</a>
	<a href="designs.php">Designs</a>
	 <div class="dropdown">
  <button class="dropbtn">Workshops</button>
  <div class="dropdown-content">
  <a href="workshops.php"> Workshops</a>
   <a href="booking.php">Bookings</a>

  </div>
</div> 
    
    <a  class="active" href="contact.php">Contact Me</a>
    
  </div>
</div>




<div class="caption-container2 work_hd" style=" background-color: white; color: black">
    <h1> Contact Me</h1>
  </div>
  <div class="contact_section">
  <div class="col-md-2 col-sm-2 col-xs-12">
</div>

  <div class="col-md-8 col-sm-8 col-xs-12">
 <div class="">
  <form method="post" class="contact_form" onsubmit="return validate();">
	<div class="form-group">
		<label class="control-label">Name</label>
		<input type="text" class="form-control" id="name" name="name" placeholder="Your name.." required>
	</div>
	<div class="form-group">
    <label class="control-label">Phone No.</label>
    <input type="text" class="form-control" id="phone" name="phone" placeholder="Your Phone No.." required max="10">
	</div>
    <div class="form-group">
		<label for="subject" class="control-label">Query</label>
		<textarea id="subject" class="form-control" name="subject" placeholder="Write something.." style="height:200px" required></textarea>
	</div>
    <input type="submit" class="btn-success btn submitbtn" value="Submit" name="submit">

  </form>
</div> 
</div> 
<div class="col-md-2 col-sm-2 col-xs-12">
</div>

</div>

<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->


  
  


   
  
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

  <script>
    validate = function(){
      var doc = document.getElementById('phone');
      var val = doc.value;
      if(val.length!==10){
          alert('enter valid mobile number');
          return false;
      }  
      else{
      
        return true;
      }
    }
    </script>
</body>
</html>
<?php
if (isset($_POST['submit'])){
 
  $name = $_POST['name'];
   $phone = $_POST['phone'];
   $phone_no = (int)$phone;
    $query = $_POST['subject'];
  

  include './admin/dbinfo.php';
//always start the session before anything else!!!!!! 


    $conn = mysqli_connect($host, $user, $pass,$database) or die("Unable to connect");
    //mysqli_select_db($link, $database) or die("Unable to select database");


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO contact_form (Name, Phone_num, Query)
VALUES ('$name', '$phone_no', '$query')";

if (mysqli_query($conn, $sql)) {
   echo "<script>alert('data added !')</script>";
} else {
    echo "<script>alert('some error occured !')</script>";
    echo mysqli_error($conn);
    
}

mysqli_close($conn);
}
?>
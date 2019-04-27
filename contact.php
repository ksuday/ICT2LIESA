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

	 
	<a href="illustrations.html">Illustrations</a>
	<a href="designs.html">Designs</a>
	 <div class="dropdown">
  <button class="dropbtn">Workshops</button>
  <div class="dropdown-content">
  <a href="workshops.php"> Workshops</a>
  <a href="gallery.html">Gallery</a>
   <a href="booking.php">Bookings</a>

  </div>
</div> 
    
    <a  class="active" href="contact.php">Contact Me</a>
    
  </div>
</div>




<div class="caption-container2">
    <H3 ><p id="caption"> <H1 style="font-family:KUNSTLER ; font-size:60px"> Contact Me</H1></p></H3>
  </div>
  <div class="row">
  <div class="column" >
 <div class="container">
  <form method="post" onsubmit="return validate();">

    <label >Name</label>
    <input type="text"  id="name" name="name" placeholder="Your name.." required>

    <label >Phone No.</label>
    <input type="text" id="phone" name="phone" placeholder="Your Phone No.." required max="10">

   
    <label for="subject">Query</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required></textarea>

    <input type="submit" value="Submit" name="submit">

  </form>
</div> </div> 
<div class="column" style="font-family:Gabriolsa; font-size=35px">
<h1>Chidren workshops will be held at Crackerjack Toys-Bulimba</h1>

<div id="map" style="width:600px;height:400px;background:yellow">
<div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=cracker%20jack%20bulimba&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.crocothemes.net"></a></div><style>.mapouter{text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
</div>
</div>
</div>

<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->


  
  


   
  
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
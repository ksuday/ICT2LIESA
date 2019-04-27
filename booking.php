<?php
include './admin/dbinfo.php';
//always start the session before anything else!!!!!! 
    $price=0;


    $link = mysqli_connect($host, $user, $pass) or die("Unable to connect");
    mysqli_select_db($link, $database) or die("Unable to select database");

    $sql_query = "select * From workshop";

?>

<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
</head>

<body>
<div class="header" style="background-image: url(images/bghf.jpeg)" >
 <a href="index.php" class="logo">LJ<br><br>Illustration & Design</a>
    
  <div class="header-right">
    <a href="index.php">Home</a>
	<a href="about.html">About Me</a>

	 
	<a href="illustrations.html">Illustrations</a>
	<a href="designs.html">Designs</a>
	 <div class="dropdown">
  <button class="dropbtn"> <a class="active" > Workshops </a> </button>
  <div class="dropdown-content">
  <a href="workshops.php"> Workshops</a>
  <a href="gallery.html">Gallery</a>
   <a class="active" href="booking.php">Bookings</a>

  </div>
</div>
    
    <a href="contact.php">Contact Me</a>
    
  </div>
</div>


	<!-- About Container -->

	<div class="w3-content">
	 <div class="caption-container2 about_heading">
		<h1 style="font-family:kunstler;font-size:55px">Booking</h1>
		<!-- <p>ILLUSTRATIONS</p>-->
	  </div>
	<div class="container" id="booking">
			<section>
			<div class="col-md-2"></div>
			<div class="col-md-8 col-sm-8 col-xs-12" >
				<form class="form-horizontal contact_form" method="post" onsubmit="return validate();" style="background-color:white">
					<div class="form-group">
						<label class="control-label col-sm-3" >Parent Name:</label>
						<div class="col-sm-9">
							<input type="text" class="form-control"  name="parent" placeholder="Parent Name" required>
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-md-3" >Select Workshop:</label>
						<div class="col-sm-9">
							<select id="work_price" name="work">
							<?php 
							$result = mysqli_query($link, $sql_query);

							if (mysqli_num_rows($result) > 0) {
		
								 while($row = mysqli_fetch_array($result)) {
								  echo'
								 <option  value="'.$row["price"].'">'.$row["title"].'</option>
								  ';
								 }
							} 
								
								?>    
							</select>
						</div>
                    </div>
                    
                    <input type="text" id="work_name" name="work_name" hidden>
		
                
                    <div class="form-group">
						<label class="control-label col-sm-3">Child:</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="child" id="child" placeholder="No. child" required onkeyup="t();">
						</div>
                    </div>
                    <div class="form-group">
						<label class="control-label col-sm-3" >Total:</label>
						<div class="col-sm-9">
							<input type="number" class="form-control" name="total" id="total" placeholder="0" disabled="disabled" >
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-9">
							<button type="submit" class="btn btn-success bookbtn" name="book">Book now</button>
						</div>
					</div>
				</form>
				</div>
				<div class="col-md-32"></div>
			</section>

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

    <script>
		validate = function(){
			if (document.getElementById('work_name').value!=""){
				 
				 var doc = document.getElementById('work_name');
				 doc.value = document.getElementById('work_name').value;
				 return true;
			}
			
		return false;
		};
function t(){
           var num = document.getElementById('child').value;
             num = parseInt(num);
            var work_price = document.getElementById('work_price');
            document.getElementById('work_name').value = work_price.options[work_price.selectedIndex].text;
            work_price = work_price.options[work_price.selectedIndex].value;
            document.getElementById('total').value = ""+num*(parseInt(work_price));
            
           
        }
</script>

</body>

</html>

<?php
if (isset($_POST['book'])){

    $p_name = $_POST['parent'];
    $t_child = $_POST['child'];
    $work_name = $_POST['work_name'];
    $total= (int)$t_child*(int)$_POST['work'];

    include './admin/dbinfo.php';
//always start the session before anything else!!!!!! 


    $conn = mysqli_connect($host, $user, $pass,$database) or die("Unable to connect");
    mysqli_select_db($link, $database) or die("Unable to select database");


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO bookings (Name, num_kids, Event_name,Total_booking_cost)
VALUES ('$p_name', '$t_child', '$work_name','$total')";

if (mysqli_query($conn, $sql)) {
   
         echo "<script>alert('workshop booked !')</script>";
} else {
    echo "<script>alert('ERROR !')</script>";
    
}

mysqli_close($conn);
}
?>
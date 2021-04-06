	<?php
     //echo "Hello world!";
     $servername= "127.0.0.1";
$username="root";
$password="";
$dbname="car_rental";

$con=mysqli_connect("127.0.0.1","root","","car_rental");
if(!$con)
{
	mysql_get_client_info();
}
else
{
	echo "i got connection ";
}
	?>

	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/elements/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Car Rentals</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/nice-select.css">			
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>

			 <header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="index.html">Home</a></li>
				          
				          <li><a href="http://localhost/my%20works/Car%20rental/connect.php">Cars</a></li>
						  
				          <li><a href="service.html">Partners</a></li>
				          
						  
				          <li><a href="contact.html">Contact</a></li>	
				          
				          
						  
				          </li>	
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header --> 

			

	
			
			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
			    <div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						
						<div class="col-lg-5  col-md-6 header-right">
							<h4 class="text-white pb-30">Book Your Car Today!</h4>
							<?php

                             $ku =$_GET['num'];
                           
						echo '<h4 class="text-white pb-30">you have select '.$ku.' number Car </h4>';	
						
                              
				  	echo	'	<form method="post"  action="mama.php?num='.$ku.'">' 
				  	  ?>
							   
 
                            <br/>  
                            pickup:
                            <input type="date" name="pickup" value="<?php echo date('Y-m-d'); ?>" />
                             <br/>
                              <br/>
                             dropoff:
                            <input type="date" name="dropoff" value="<?php echo date('Y-m-d'); ?>" />
                           <br/>
                           <br/>
                            name:<input type="text" name="name">
                               <br/>
                                <br/>
                             phone:<input type="int" name="phone">
                            <br/>
                             <br/>

 

                            <input type="Submit" name="Insert">
							</form>
						
						</div>
																	
					</div>
				</div>	
			</div>					
			</section>
			<!-- End banner Area -->
		


			
			


			
			
			 <!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						
						<p class="mt-50 mx-auto footer-text col-lg-12">
							
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is developed by <i class="fa fa-heart-o" aria-hidden="true"></i>  Sirdarta Prashad Banik <i class="fa fa-heart-o" aria-hidden="true"></i> Shafayat Jamil Anoy 
<i class="fa fa-heart-o" aria-hidden="true"></i>  <br> CSE, Khulna University
						</p>											
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->		

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>			
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>	
			<script src="js/waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>					
			<script src="js/parallax.min.js"></script>		
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>

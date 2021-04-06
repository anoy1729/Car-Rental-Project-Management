<?php
//echo "hello World !";
//echo "today is ".date("d/m/Y")." and ".date("l").".<br>";
$servername= "127.0.0.1";
$username="root";
$password="";
$dbname="car_rental";

$con= mysqli_connect('localhost','root','','car_rental');
if (!$con) {
 die ("connection error".mysqli_connect_error());
}
  //echo " i got connection";

$sql=  "SELECT * FROM carinfo,bookinfo  WHERE (carinfo.BookID=bookinfo.BookID) OR (carinfo.BookID=NULL)";

$show=mysqli_query($con,$sql);

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
			<section class="banner-area relative" >
			
				
						<img src="img/matha.jpg" width="1600" height="65">
																	
								
			</section>
			<!-- End banner Area -->	

		
			

			<!-- Start model Area -->
			<section class="model-area section-gap" id="cars">
				<div class="container">
					<div class="row d-flex justify-content-center pb-40">
						<div class="col-md-8 pb-40 header-text">
							<h1 class="text-center pb-10">Choose your Desired Car Model</h1>
							
						</div>
					</div>				
					
						
                             


                             <?php
                                $i=0;
                              while ($carinfo=mysqli_fetch_assoc($show)) : ?>
						<div class="row align-items-center single-model item">
							<div class="col-lg-6 model-left">
								<div class="title justify-content-between d-flex">
                                    <h4 class="mt-20">Car number <?php $i++;   $p=$carinfo['CarID'];
                                    echo $i; ?></h4>
                                    <br>
									<h4 class="mt-20"><?php echo $carinfo['Carname']; ?></h4>
									<h2>Tk <?php echo $carinfo['Vara']; ?><span>/day</span></h2>
									
								</div>
								
								<p>
									Capacity         : <?php echo $carinfo['Capacity']; ?> Person <br>
									Doors            : <?php echo $carinfo['Doors']; ?> <br>
									Air Condition    : <?php
									if ($carinfo['Air']==1) {
									echo "YES";
									}
									else
									{ echo "NO";
									}
									  ?>
									   <br>
									
								    Available     :

								    <?php
								    $con= mysqli_connect('localhost','root','','car_rental');
								    if($carinfo['Available']==0)
								    { 
								    $sql="UPDATE carinfo,bookinfo
							          SET carinfo.Available=1
								    WHERE carinfo.CarID=bookinfo.CarID AND carinfo.BookID=bookinfo.BookID AND  CURRENT_DATE() BETWEEN bookinfo.Pickupdate AND bookinfo.Dropofdate";
								     mysqli_query($con,$sql);


								}
								else if($carinfo['Available']==1)
                                 {  
								  $sql1="UPDATE carinfo,bookinfo
							SET carinfo.Available=0
								    WHERE carinfo.CarID=bookinfo.CarID AND carinfo.BookID=bookinfo.BookID AND  CURRENT_DATE() NOT BETWEEN bookinfo.Pickupdate AND bookinfo.Dropofdate"; 
								     mysqli_query($con,$sql1);
								    }
								    

									 if ($carinfo['Available']==1) {
									echo "NO";
									
									    
								    // $p=$carinfo['CarID'] AND carinfo.CarID='$p';
							      /*	$mama="SELECT *
									       FROM carinfo,bookinfo
									       WHERE carinfo.BookID=bookinfo.BookID ";
									      mysqli_query($con,$mama); */
                                         // $book=mysqli_fetch_row($show) ; 

									       echo " will be Available after date  ";
									   echo $carinfo['Dropofdate'];
									}
									else
									{ echo "YES";
									}
									  ?> 
								</p>
								<?php 
								if ($carinfo['Available']==0)
								{
									$ku=$carinfo['CarID']; 
								 echo '<a class="text-uppercase primary-btn" href="daily-rent.php?num='.$ku.'">Book This Car Now</a> ';
								}
								
								 ?>
								
							</div>
						<!--	<div class="col-lg-6 model-right">
								<img class="img-fluid" src="img/car.jpg" alt="">
								
							</div> -->

							<div class="row align-items-center single-model item">
                           <?php  
							$imageData = base64_encode($carinfo['Carimage']);

                    // Format the image SRC:  data:{mime};base64,{data};   
                          $src = 'data:image/jpeg;base64,'.$imageData;

                              echo "<div >";
                              echo "<img  src='".$src."'  height='300'  width='500'>";
                              echo "</div>";

                              ?>

                          </div>
                              </div>

                <?php  endwhile; ?>




																
					</div>
				</div>	
			</section>
			<!-- End model Area -->


						
	<!-- Start callaction Area -->
			<section class="callaction-area relative section-gap">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-10">
							<h1 class="text-white">Experience Great Support</h1>
							<p>
								provide best cars and drivers in Khulna
							</p>
							<a class="callaction-btn text-uppercase" href="contact.html">contact us</a>	
						</div>
					</div>
				</div>	
			</section>
			<!-- End callaction Area -->

			


			
			
			 <!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						
						<p class="mt-50 mx-auto footer-text col-lg-12">
							
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is developed by <i class="fa fa-heart-o" aria-hidden="true"></i>  Sirdarta Prashad Banik <i class="fa fa-heart-o" aria-hidden="true"></i> Shafayat Jamil Anoy 
<i class="fa fa-heart-o" aria-hidden="true"></i> <br> CSE, Khulna University
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

<?php


$ku =$_GET['num'];
echo $ku;
// echo "Hello world!";
     $servername= "127.0.0.1";
$username="root";
$password="";
$dbname="car_rental";

$con=mysqli_connect("127.0.0.1","root","","car_rental");
if(!$con)
{
	mysqli_get_client_info();
}
else
{
	//echo "connection paiche mama ";

	if (isset($_POST['Insert'])) {
	
	 
   $pickup1=$_POST['pickup'];
	 $dropoff1=$_POST['dropoff'];
	 $name1=$_POST['name'];
   $phone1=$_POST['phone'];
    
         }
/*$name2 = htmlentities($name1);
$phone2 = htmlentities($phone1);
$pickup2 = htmlentities($pickup1);
$dropoff2 = htmlentities($dropoff1);
*/
$sql="INSERT INTO bookinfo(Pickupdate,Dropofdate,Name,Phonenum,CarID)
            VALUES('$pickup1','$dropoff1','$name1','$phone1','$ku')";
if (mysqli_query($con,$sql)) {
	echo "new record entry hoiche <br/> ";
	//echo '<link rel="shortcut icon" href="connect.php"';
	
}


/*else
{
	echo "jamela".$con->error;
}
header("refresh:2:url=daily-rent.php"); */
//mysqli_close($con);

$sql2=  "  SELECT * FROM bookinfo order by BookID desc limit 1;";

    $show=mysqli_query($con,$sql2);
  
  $book=mysqli_fetch_row($show) ;
   echo $book[0];
	$bo= $book[0];
	$sql1="UPDATE carinfo, bookinfo
	SET carinfo.BookID='$bo'
	WHERE carinfo.CarID=bookinfo.CarID AND bookinfo.BookID='$bo'
    ";
   $con=mysqli_connect("127.0.0.1","root","","car_rental");
     mysqli_query($con,$sql1);
    

// echo '<a href="http://localhost/my%20works/Car%20rental/connect.php">click here to book more car </a>;
   //  header("Location: localhost/my%20works/Car%20rental/connect.php");     <script type="text/javascript">
   // window.location.href = 'http://localhost/my%20works/Car%20rental/connect.php';
/// </script>

   // refresh / redirect to an internal web page
// ------------------------------------------

    // exit();
    
}

			?>

			 <script type="text/javascript">
         <!--
            function Redirect() {
               window.location="http://localhost/my%20works/Car%20rental/connect.php";
            }
            
            document.write("You will be redirected to main page in 3 sec.");
            setTimeout('Redirect()', 3000);
         //-->
      </script>

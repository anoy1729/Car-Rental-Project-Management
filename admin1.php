<?php
echo "hello World !";
echo "today is ".date("d/m/Y")." and ".date("l").".<br>";
$servername= "127.0.0.1";
$username="root";
$password="";
$dbname="car_rental";

$con= mysqli_connect('localhost','root','','car_rental');
if (!$con) {
 die ("connection error".mysqli_connect_error());
}
    if (isset($_POST['Insert1'])) {
  
   $deleteID1=$_POST['deleteID'];
    
         

   $sql1=  "DELETE FROM bookinfo WHERE BookID='$deleteID1' ";
   $show=mysqli_query($con,$sql1);
}
  // header('Location: ' . $_SERVER['HTTP_REFERER']);
if (isset($_POST['Insert'])) {
   
   $CarID1=$_POST['CarID'];
   $Carname1=$_POST['Carname'];
   $Vara1=$_POST['Vara'];
   $Capacity1=$_POST['Capacity'];
   $Air1=$_POST['Air'];
   $Doors1=$_POST['Doors'];
   $Available1=$_POST['Available'];
   $image = addslashes(file_get_contents($_FILES['file']['tmp_name']));
   $BookID1=$_POST['BookID'];

        
$sql= "INSERT INTO carinfo (CarID,Carname,Vara,Capacity,Air,Doors,Available,Carimage,BookID)
         VALUES ('$CarID1','$Carname1','$Vara1','$Capacity1','$Air1','$Doors1','$Available1','$image','$BookID1')"; 
  
     
    $result= mysqli_query($con,$sql); 

    if($result) {
        echo "<br/> Image Uploaded.";   
    }else{
        echo "Not Uploaded";     
    } 
                
        } 
    



    
    
 


?>
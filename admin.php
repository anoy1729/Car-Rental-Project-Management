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
  echo " i got connection";

$sql=  "SELECT * FROM carinfo";

$show=mysqli_query($con,$sql);

  ?>

  <html>
  <head>
  	<title>admin</title>
  </head>
  <body>
  	<table>
  		<tr>
  		<th>CARID</th>
  		<th>car Name</th>
  		<th>VARA</th>
  		<th>Capacity</th>
  		<th>Air</th>
  		<th>Doors</th>
  		<th>Available</th>
  		<th>BOOkID</th>
      </tr>

     <?php 
      while ($info=mysqli_fetch_assoc($show)) {
      	echo "<tr>";
      echo "<td>".$info['CarID']."</td>";
      echo "<td>".$info['Carname']."</td>";
      echo "<td>".$info['Vara']."</td>";
      echo "<td>".$info['Capacity']."</td>";
      echo "<td>".$info['Air']."</td>";
      echo "<td>".$info['Doors']."</td>";
      echo "<td>".$info['Available']."</td>";
      echo "<td>".$info['BookID']."</td>";
      	echo "</tr>";
      }
      ?>
  	</table>
  <br>
  <br>
  <table>
      <tr>
      <th>bookID</th>
      <th> Name</th>
      <th>phone number</th>
      <th>pick up date</th>
      <th>Drop off date</th>
      <th>CarID</th>
      
      </tr>

     <?php 
     $con= mysqli_connect('localhost','root','','car_rental');
if (!$con) {
 die ("connection error".mysqli_connect_error());
}
  echo " i got connection";

$sql1=  "SELECT * FROM bookinfo";

$show1=mysqli_query($con,$sql1);
      while ($info1=mysqli_fetch_assoc($show1)) {
        echo "<tr>";
      echo "<td>".$info1['BookID']."</td>";
      echo "<td>".$info1['Name']."</td>";
      echo "<td>".$info1['Phonenum']."</td>";
      echo "<td>".$info1['Pickupdate']."</td>";
      echo "<td>".$info1['Dropofdate']."</td>";
      echo "<td>".$info1['CarID']."</td>";
      
        echo "</tr>";
      }
      ?>
    </table>
    <br>
    <br>
    <br>

   
    <form method="post" action="admin1.php" enctype="multipart/form-data">

     CarID:<input type="int" name="CarID">
  <br/>
 
  Carname:<input type="text" name="Carname">
  <br/>
 
  Vara:<input type="int" name="Vara">
  <br/>

   Capacity:<input type="int" name="Capacity">
  <br/>

 Air: <input type="tinyint" name="Air">
  <br/>

 Doors:<input type="int" name="Doors">
  <br/>

  Available:<input type="text" name="Available">
  <br/>

  BookID:<input type="int" name="BookID">
  <br/>

   <input type="file" name="file" >
  <br/>
  <input type="Submit" name="Insert">
</form>
<BR/>
<BR/>
<BR/>
 <form method="post" action="admin1.php">
<p>delete any bookinfo enter the book ID</p>
<input type='int'  name='deleteID' >
<input type="Submit" name="Insert1">
</form>


  
  </body>
  </html>
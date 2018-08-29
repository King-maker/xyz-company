
	
<?php
 $servername = "localhost";
 $dbusername = "root";
 $dbpassword = "";
 $dbname = "employees";
 //create connection
  $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
  
  //check connection
  if($conn->connect_error){
	  die("connection failed:".$conn->connect_error);
  }
  
 
  

?>
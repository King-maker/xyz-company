<?php
               $EMP_id = "";
               $FNAME ="";
	           $NAME = "";
	           $DEPT = "";
	           $DEPT_ID ="";
	           $SALARY ="";

			 include 'conn.php';
  // INSERT DATA INTO DATABASE
  if(isset($_POST['submit']) )
  {
 	$FNAME = $_POST['FNAME'];
	$NAME = $_POST['NAME'];
	$DEPT = $_POST['DEPT'];
	$DEPT_ID = $_POST['DEPT_ID'];
	$SALARY = $_POST['SALARY'];
	
	$sql = "INSERT INTO employees_info(FNAME,NAME,DEPT,DEPT_ID,SALARY)
	VALUES('$FNAME','$NAME','$DEPT','$DEPT_ID','$SALARY')";

   if ($conn->query($sql)=== TRUE){
	   echo  "New recorded created successfully";
   }
   else{
	   echo "Error: ".$sql ."\n" .$conn->error;
   }
  } 
  //DELETE DATA FROM DATABASE
   if(isset($_POST['delete']))
   {
	  $EMP_id = $_POST['EMP_id'];
	  $FNAME = $_POST['FNAME'];
	  $NAME = $_POST['NAME'];
	  $DEPT = $_POST['DEPT'];
	  $DEPT_ID = $_POST['DEPT_ID'];
	  $SALARY = $_POST['SALARY'];
	
    $query1="DELETE FROM employees_info WHERE EMP_id ='".$EMP_id."'";
  
   if ($conn->query($query1)===TRUE){ 
	   echo   "Record deleted successfully";
   }
   else{
	   echo "could not delete record:".$query1."\n" .$conn->error;
   }
  } 
   // UPDATE RECORDS
   if(isset($_POST['update']))
   {
	  $EMP_id = $_POST['EMP_id'];
	  $FNAME = $_POST['FNAME'];
	  $NAME = $_POST['NAME'];
	  $DEPT = $_POST['DEPT'];
	  $DEPT_ID = $_POST['DEPT_ID'];
	  $SALARY = $_POST['SALARY'];
	
    $query2= "UPDATE employees_info SET FNAME='$FNAME',NAME='$NAME',DEPT='$DEPT',DEPT_ID='$DEPT_ID',SALARY='$SALARY' WHERE EMP_id='".$EMP_id."'";
  
   if ($conn->query($query2)===TRUE){ 
	   echo   "Record updated successfully";
   }
   else{
	   echo "could not update record:".$query2."\n" .$conn->error;
   }
  } 

  //SEARCH FROM DATABASE
   if(isset($_POST['search']))
   {
	 $EMP_id = $_POST['EMP_id'];
	  $FNAME = $_POST['FNAME'];
	  $NAME = $_POST['NAME'];
	  $DEPT = $_POST['DEPT'];
	  $DEPT_ID = $_POST['DEPT_ID'];
	  $SALARY = $_POST['SALARY'];
	
    $query3= "SELECT * FROM employees_info WHERE EMP_id='".$EMP_id."'";
	$search_result = mysqli_query($conn,$query3) or die("could not connect");
  
   if ($search_result)
   {
	   if(mysqli_num_rows($search_result)>0)
	   {
		   while($row = mysqli_fetch_array($search_result,MYSQL_ASSOC))
		   {
			   
	           $FNAME = $row['FNAME'];
	           $NAME = $row['NAME'];
	           $DEPT = $row['DEPT'];
	           $DEPT_ID = $row['DEPT_ID'];
	           $SALARY = $row['SALARY'];  
		   }
	   }
	   if($conn->query($query3)===TRUE)
   { 
	   echo   "Record found";
   }
   }
   else{
	   echo "could not find record:".$query3."\n" .$conn->error;
   }
   } 
    
	
	
	 
     
      
     
      $conn->close();
     
			   
			   
?>
 
  <!DOCTYPE html>
	<html>
	<head>
	<Style type="css/text">
	body {
		table-position:center;
		background-repeat:no-repeat;
	}
	
	
	
	</style>
		<title>EMPLOYEE DATA</title>
	</head>
	<body background="mouse.jpg">
	
	<form action="data_entry.php" method="post">
       <h2>WELCOME TO XYZ COMPANY</h2>
      <table border="1" width="400" height="350" >
      	<tr>
      		<td colspan="5" align="centre" bgcolor="grey">EMPLOYEE INFORMATION</td>
      	</tr>
      	<tr>
		<td align = "right">EMPLOYEE ID</td><td> <input type = "number" name = "EMP_id" placeholder = "EMPLOYEE ID" value = "<?php echo $EMP_id;?>"</td>
		</tr>
      
      	<tr>
      		<td align="right">FIRST NAME</td><td>  <input type="text" name="FNAME" placeholder = "FIRST NAME" value = "<?php echo $FNAME;?>" ></td>
      	</tr>
      	<tr>
      		<td align="right">LAST NAME</td><td>  <input type="text"  name="NAME" placeholder="LAST NAME" value = "<?php echo $NAME;?>"></td>
      	</tr>
      	<tr>
      		<td align="right">DEPARTMENT</td><td>  <input type="text" name="DEPT" placeholder ="DEPT" value = "<?php echo $DEPT;?>"></td>
      	</tr>
      	<tr>
      		<td align="right">DEPT ID</td><td>  <input type="text" name="DEPT_ID" placeholder="DEPT_ID" value = "<?php echo $DEPT_ID;?>" ></td>
      	</tr>
      	<tr>
      		<td align="right">SALARY</td><td>  <input type="number" name="SALARY" placeholder="SALARY" value = "<?php echo $SALARY;?>" ></td>

      	</tr>
      	<>
      		<button type="submit" name ="submit" >ADD</button>
			<button type="submit" name ="update" >UPDATE</button>
			<button type="submit" name ="delete" >DELETE</button>
			<button type="submit" name ="search" >SEARCH</button>
			
			
      		
      		
      	</tr>
      	 
      </table>

	</form>
	</body>
	</html>>
	
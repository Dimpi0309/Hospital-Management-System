<?php 
include("db_conn.php");
error_reporting(0);
?>
<html>
<head>
	<title>FORM FOR INSERT </title>
	<link rel = "stylesheet" href = "styleinsert_doctor.css">
</head>
<body>
	<form method="GET">
     <center><h2>DOCTOR DETAILS</h2></center>
		D_ID <input type="text" name="did" placeholder="ENTER DOCTOR'S ID"  value=""/><br>
		D_NAME <input type="text" name="dname" placeholder="ENTER DOCTOR'S NAME" value=""/><br>
		DEGREE <input type="text" name="degree" placeholder="ENTER DOCTOR'S DEGREE" value=""/><br>
		DOMAIN <input type="text" name="domain"placeholder="ENTER DOCTOR'S DOMAIN"  value=""/><br>
		SALARY <input type="text" name="salary" placeholder="ENTER DOCTOR'S SALARY"  value=""/><br>
		EXPERIENCE <input type="text" name="exp" placeholder="ENTER DOCTOR'S EXPERIENCE"  value=""/><br>
	 <center><button type="submit" class="button">INSERT</button></center>
	</form>
	<?php
		if($_GET['submit'])
		{
			$a=$_GET['did'];
			$b=$_GET['dname'];
			$c=$_GET['degree'];
			$d=$_GET['domain'];
			$e=$_GET['salary'];
			$f=$_GET['exp'];
			if($a!="" && $b!="" && $c!="" && $d['gender']!="" && $e!="" && $f!="")
			{
				$query="INSERT INTO Patient VALUES ('$a','$b','$c','$d','$e','$f')";
				$data=mysqli_query($conn,$query);
				if($data)
				{
					echo "DATA INSERTED INTO THE DATABASE";
				}
			}
			else
			{
				echo "ALL FIELDS ARE REQUIRED";
			}
		}
	?>
</body>
</html>
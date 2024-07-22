<?php 
include("db_conn.php");
error_reporting(0);
?>
<html>
<head>
	<title>FORM FOR INSERT </title>
<link rel = "stylesheet" href = "styleinsert_patient.css">
</head>
<body>	
	<form method="GET" action="">
   	<center><h2>PATIENT DETAILS</h2><br></center>
		P_ID: <input type="text" name="pid" placeholder ="ENTER PATIENT'S ID"  value=""/><br>
		P_NAME: <input type="text" name="pname" placeholder ="ENTER PATIENT'S NAME" value=""/><br>
		AGE: <input type="text" name="age" placeholder="ENTER PATIENT'S AGE " value=""/><br>
		GENDER: <input type="radio" name="gender" value="male">MALE<input type="radio" name="gender" value="female">FEMALE<br>
		CONTACT: <input type="text" name="con" placeholder="ENTER PATIENT'S CONTACT NUMBER"  value=""/><br>
		ADDRESS: <input type="text" name="add" placeholder="ENTER PATIENT'S ADDRESS" value=""/><br>
		DOB: <input type="text" name="dob" placeholder="ENTER PATIENT'S DATE OF BIRTH"  value=""/><br>
		DATE_OF_AD: <input type="text" name="ad" placeholder="ENTER PATIENT'S DATE OF ADDMISSION" value=""/><br>
		D_ID: <input type="text" name="did"placeholder="ENTER DOCTOR'S ID" value=""/><br>
		<center>
		<button type="submit" class="button">INSERT</button>
		</center>
	</form>
	
	<?php
		if($_GET['submit'])
		{
			$a=$_GET['pid'];
			$b=$_GET['pname'];
			$c=$_GET['age'];
			$d=$_GET['gender'];
			$e=$_GET['con'];
			$f=$_GET['add'];
			$g=$_GET['dob'];
			$h=$_GET['ad'];
			$i= $_GET['did'];
			if($a!="" && $b!="" && $c!="" && $d!="" && $e!="" && $f!="" && $g!="" && $h!="" && $i!="")
			{
				$query="INSERT INTO PATIENT VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i')";
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
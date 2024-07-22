<style>
	*{
		margin:0;
		padding:0;
		font-family:century gothic;
	}
	body{
	background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(image.jpg);
	height:100vh;
	background-size:cover;
	background-position:center;
	}
	</style>
	<?php 
	include("db_conn.php");
	error_reporting(0);
	$query="SELECT * FROM DEPARTMENT";
	$data=mysqli_query($conn,$query);
	$total=mysqli_num_rows($data);
	if($total!=0)
		{ 
			?>
			<br><br>
			<center> <h1 style="color: yellow"> <b> <u> Displaying the records of Department table </u> </b> </h2> </center><br>
			<center>
			<table border="2" cellspacing="2" cellpadding="2" style="width: 50%; text-align: center; background-color: #DAF7A6;">
				<tr>
					<th> <font face ="Arial">DEP_ID</font></th>
					<th> <font face="Arial">DEP_NAME</font></th>
					<th> <font face="Arial">TOTAL_EMP</font></th>
				</tr>
			<?php 
		while($result=mysqli_fetch_assoc($data))
			{
				echo "<tr>
						<td>".$result['DepId']."</td>
						<td>".$result['DepName']."</td>
						<td>".$result['TotalEmp']."</td>
					</tr>";
			}
		}
	else
	{
		echo "NO RECORDS ARE FOUND";
	}
	?>
	</table></center>
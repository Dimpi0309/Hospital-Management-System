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
$query="SELECT P.Pname,P.Date_of_ad,D.Dname,D.Domain,D.Exp,A.Con FROM PATIENT P,DOCTOR D,ADMISSION A WHERE P.Did=D.Did AND P.Pid=A.Pid";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total!=0)
	{ 
		?>
		<br><br>
		<center><h1 style="color: yellow"><u><b>Displaying the join of Patient ,Admission and Doctor table </u></b></h1></center>
		<br>
		<center>
		<table border="5" cellspacing="2" cellpadding="2" style="width: 50%; text-align: center; background-color: #DAF7A6;">
			<tr>
				<th> <font face="Arial">PName</font></th>
				<th> <font face="Arial">Date_of_Admission </font></th>
				<th> <font face="Arial">DName</font></th>
				<th> <font face="Arial">Domain</font></th>
				<th> <font face="Arial">Experience</font></th>
				<th> <font face="Arial">Condition</font></th>
			</tr>
	<?php 
		while($result=mysqli_fetch_assoc($data))
		{
			echo "<tr>
					<td>".$result['Pname']."</td>
					<td>".$result['Date_of_ad']."</td>
					<td>".$result['Dname']."</td>
					<td>".$result['Domain']."</td>
					<td>".$result['Exp']."</td>
					<td>".$result['Con']."</td>
				</tr>";
		}
	}
else
	{
		echo "NO RECORDS ARE FOUND";
	}
?>
</table></center>
<style>
	*{
		margin:0;
		padding:0;
		font-family:century gothic;
	}
	body{
	background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(first.jpg);
	height:100vh;
	background-size:cover;
	background-position:center;
	}
	</style>
<?php 
include("db_conn.php");
error_reporting(0);
echo "<br>";
echo "<br>";
$query="SELECT * FROM ICU";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total!=0)
	{ 
		?>
		<h1 style="color: yellow"><center><b><u>Displaying the records of ICU table</u></b></center></h1> <br>
		<center>
		<table border="5" cellspacing="2" cellpadding="2" style="width: 50%; text-align: center; background-color: #DAF7A6;">
			<tr>
				<th> <font face ="Arial">ICU_NO</font></th>
				<th> <font face="Arial">B_ID</font></th>
				<th> <font face="Arial">P_ID</font></th>
				<th> <font face="Arial">SITUATION</font></th>
				<th> <font face="Arial">D_ID</font></th>
				<th> <font face="Arial">F_ID</font></th>
			</tr>
	<?php 
		while($result=mysqli_fetch_assoc($data))
		{
			echo "<tr>
					<td>".$result['icu_no']."</td>
					<td>".$result['Bid']."</td>
					<td>".$result['Pid']."</td>
					<td>".$result['Situation']."</td>
					<td>".$result['Did']."</td>
					<td>".$result['Fid']."</td>
				</tr>";
		}
	}
else
	{
		echo "NO RECORDS ARE FOUND";
	}
?>
</table></center>
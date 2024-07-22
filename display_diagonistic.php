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
$query="SELECT * FROM DIAGNOS";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total!=0)
	{ 
		?>
		<br><br>
		<h1 style="color: yellow"><center><b><u>Displaying the records of Diagnostic table </u></b></center></h2><br>
		<center>
		<table border="6" cellspacing="2" cellpadding="2" style="width: 50%; text-align: center; background-color: #DAF7A6;">
			<tr>
                <th> <font face ="Arial">DG_ID</font></th>
				<th> <font face="Arial">DG_NANE</font></th>
				<th> <font face="Arial">B_ID</font></th>
				<th> <font face="Arial">F_ID</font></th>
				<th> <font face="Arial">R_ID</font></th>
				<th> <font face="Arial">D_ID</font></th>
				<th> <font face ="Arial">SUPERVISOR</font></th>
			</tr>
	<?php 
		while($result=mysqli_fetch_assoc($data))
		{
			echo "<tr>
					<td>".$result['DGid']."</td>
					<td>".$result['DGname']."</td>
					<td>".$result['Bid']."</td>
					<td>".$result['Fid']."</td>
					<td>".$result['Rid']."</td>
					<td>".$result['Did']."</td>
					<td>".$result['Supervisor']."</td>
				</tr>";
		}
	}
else
	{
		echo "NO RECORDS ARE FOUND";
	}
?>
</table></center>
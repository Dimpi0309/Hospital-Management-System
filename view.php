<style>
	td
	{
		padding: 10px;
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
$query="SELECT * FROM Patient";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total!=0)
	{ 
		?>
		<h1 style="color: yellow"><center><u><b>Which row you want to update/delete just click on the link</b></u></center></h1>
		<center>
		<table border="3" cellspacing="2" cellpadding="2" style="width: 50%; text-align: center; background-color: #DAF7A6;">
			<tr>
				<th> <font face ="Arial">P_ID</font></th>
				<th> <font face="Arial">P_NAME</font></th>
				<th> <font face="Arial">AGE</font></th>
				<th> <font face="Arial">GENDER</font></th>
				<th> <font face="Arial">CONTACT</font></th>
				<th> <font face="Arial">ADDRESS</font></th>
				<th> <font face="Arial">DOB</font></th>
				<th> <font face="Arial">DATE_OF_AD </font></th>
				<th> <font face="Arial">D_ID</font></th>
				<th colspan="2"> <font face="Arial">OPERATIONS</font></th>
			</tr>
	<?php 
		while($result=mysqli_fetch_assoc($data))
		{
			echo "<tr>
					<td>".$result['Pid']."</td>
					<td>".$result['Pname']."</td>
					<td>".$result['Age']."</td>
					<td>".$result['Gender']."</td>
					<td>".$result['Contact']."</td>
					<td>".$result['Address']."</td>
					<td>".$result['DOB']."</td>
					<td>".$result['Date_of_ad']."</td>
					<td>".$result['Did']."</td>
					<td><a href ='update_patient.php?a=$result[Pid] & b=$result[Pname] & c=$result[Age] & d=$result[Gender] & e=$result[Contact] & f=$result[Address] & g=$result[DOB] & h=$result[Date_of_ad] & i=$result[Did]'>UPDATE</a></td>
					<td><a href='delete.php?a=$result[Pid]' onClick='return checkdelete'>DELETE</a></td>
				</tr>";
		}
	}
else
	{
		echo "NO RECORDS ARE FOUND";
	}
?>
</table></center>
<script>
	function checkdelete()
	{
		return confirm("Are you sure you want to delete this data???");
	}
</script>
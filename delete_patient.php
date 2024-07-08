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
$x=$_GET['a'];
$query="DELETE FROM PATIENT WHERE Pid='$x'";
$data=mysqli_query($conn,$query);
if($data)
{   
	echo "<script>alert('Record Deleted')</script>";
 	?>
	<META HTTP-EQUIV="Refresh" content="0; URL=http://localhost/Hospitality/view.php">
	<?php
}
else
	{     
		echo "<font color='red'>SORRY,DELETE PROCESS FAILED!!";
	}
?>
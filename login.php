<?php
session_start();
include "db_conn.php";
if(isset($_POST['username']) && isset($_POST['password']))
{
	function validate($data)
	{
		$data=trim($data);
		$data=stripcslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}
	$username=validate($_POST['username']);
	$password=validate($_POST['password']);
	if(empty($username))
	{
		header("Location: admin.php?error=User Name is required");
		exit();
	}
	else if(empty($password))
	{
		header("Location: admin.php?error=Password is required");
		exit();
	}
	else
	{
		$sql="SELECT * FROM users WHERE username='$username' AND password='$password'";
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)===1)
		{
			$row=mysqli_fetch_assoc($result);
			if($row['username']=== $username && $row['password']=== $password)
			{
				
				header("Location: home.php");

			}
			else
			{
				header("Location: admin.php?error=INCORRECT Username OR Password");
				exit();
			}
		}
		else
		{
			header("Location: admin.php?error=INCORRECT Username OR Password");
			exit();
		}
	}
}
else
{
	header("Location: admin.php");
	exit();
}
?>
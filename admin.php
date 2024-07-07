<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet"  href="styleadmin.css">
</head>
<body>
      <h1><u>CITY HOSPITAL</u></h1>
	<form action="login.php" method="post">
		<h2><center><i><u>LOGIN FOR ACCESSING THE ADMIN PAGE</u></i></center></h2><br><br>
		<h3><center>Enter Your Credentials</center></h3><br>
		<?php
		 if(isset($_GET['error']))
		  { 
		  ?>
		  <p class="error">
		  <?php 
		  echo $_GET['error']; 
		  ?>
		  </p>
		<?php
		 }
		  ?>
		  <center>
		<input type="text" name="username" placeholder="Enter your Email"><br><br>
		<input type="password" name="password" placeholder="Enter your Password"><br><br>
        <button type="submit" class="button">LOGIN</button>
		</center>
	</form>
</body>
</html>
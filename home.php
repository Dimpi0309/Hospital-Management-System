<html>
<head>
	<title>HOME PAGE</title>
<link rel = "stylesheet" href = "stylehome.css">
</head>
<body>
<header>
	<?php
		session_start();
	?>
<div class="title">
<h1><u>WELCOME TO CITY HOSPITAL</u></h1>
</div>
<div class="button">
	<a href="insert.php" class ="btn">INSERT DATA</a>&nbsp&nbsp
	<a href="view.php" class ="btn">DELETE/UPDATE DATA</a>&nbsp&nbsp
	<a href="display.php" class ="btn">VIEW DATA</a>
</div>
</header>
</body>
</html>
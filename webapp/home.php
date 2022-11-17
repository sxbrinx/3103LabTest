<?php 
	session_start();
		
	if(!isset($_SESSION['user_id']))
	{
		header('location:login.php');
		exit;
	}
	

?>

<!DOCTYPE html>
<html>
<head>
<title>homepage</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
	<div class="container-dashboard">		
		<a href="logout.php?logout=true" class="logout-link">Logout</a>
	</div>
</body>
</html>
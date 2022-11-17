<?php 
	session_start();
	
	if(isset($_POST['submit']))
	{
		if((isset($_POST['password']) && $_POST['password'] !=''))
		{
			$password = trim($_POST['password']);
				if($password == "password1234")
				{
					$_SESSION['user_id'] = $username;
					
					header('location:home.php');
					exit;
					
				}
			}
			$errorMsg = "Login failed";
		}

		public static boolean is_Valid_Password(String password) {

			if (password.length() <  10) return false;
		}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
	
	<div class="container">
		<h1>PHP Login</h1>
		<?php 
			if(isset($errorMsg))
			{
				echo "<div class='error-msg'>";
				echo $errorMsg;
				echo "</div>";
				unset($errorMsg);
			}
			
			if(isset($_GET['logout']))
			{
				echo "<div class='success-msg'>";
				echo "You have successfully logout";
				echo "</div>";
			}
		?>
		<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
			<div class="field-container">
				<label>Password</label>
				<input type="password" name="password" required placeholder="Enter Your Password">
			</div>
			<div class="field-container">
				<button type="submit" name="submit">Submit</button>
			</div>
			
		</form>
	</div>
</body>
</html>
<?php
	session_start();
	if(isset($_SESSION["success"]))
	{
		header("location:main.php");
		exit();
	}
	
	if(isset($_POST["username"]) && isset($_POST["password"]))
	{	
		$Username = $_POST["username"];
		$Password = $_POST["password"];
		
		if($Username == "samu" && $Password == "samu123")
		{
			header("location:main.php");
			$_SESSION["success"] = true;
			exit();
		}
		else
		{
			$error = "Invailid Username & Password";		
		}
	}
?>

<html>
	<head> 
		<title>
			Login
		</title>
	</head>
	<body>
		<form method="POST">
		
		<?php if(isset($error)){echo $error."<br>";}?>
		
			Username:<input name="username" type="text"/><br><br>
			Password:<input name="password" type="password"/><br><br>
			<input type="submit" value="Login"/> 			
		</form>
	</body>
</html>
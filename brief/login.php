<?php
	include_once('connexion.php');

	if (isset($_POST["username"]) && isset($_POST["password"])) {
		$user = $_POST["username"];
		$pass = $_POST["password"];
		$selct = "SELECT  * FROM users WHERE username = '".$user."'  AND  pass_word = '".$pass."' LIMIT 1" ;
		$results = mysqli_query($connx, $selct);
		if(mysqli_num_rows($results)==1){
			header("Location: index.php");
			exit();
		}
		else {
			echo "Please verify your infos";
			exit();
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style1.css ?v=<?php echo time(); ?>"/>      
	<title>login</title>
</head>
<body>
	<main>
			<form class="comment" action="login.php" method="post">
				<p class="title">Login</p>

				<label for="uname" class="user">User Name:</label>
				<input type="text" name="username" placeholder="username" id="uname" class="name">

				<label for="pass" class="user">Password:</label>
				<input type="password" name="password" placeholder="password" id="pass" class="name">

				<input type="submit" name="login" value="login" class="btn1">

				<a class="lien" href="sign.php">Sign Up</a>
			</form>
	</main>

</body>
</html>
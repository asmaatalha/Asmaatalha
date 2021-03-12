<?php
   include_once('connexion.php');
    if (!empty($_POST["username"]) && !empty( $_POST["password1"]) && !empty($_POST["password2"])) {
        $user = $_POST["username"];
        $pass = $_POST["password1"];
        $passw = $_POST["password2"];
        if (strlen($user) <= 3 || strlen($user) >= 15) {
            echo "Name 3 to 15";
        }
        elseif (strlen($pass) <= 3 || strlen($pass) >= 8) {
            echo "Password 3 to 8";
        }
        elseif ($pass != $passw) {
            echo "Erreur";
        }
        else {
            $insert = "INSERT INTO users(username, pass_word) VALUES('$user', '$pass')";
            $query = mysqli_query($connx, $insert);
             if (!$query) {
                echo "error ". mysqli_error($connx);
                die();
            }
            header("location: login.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style2.css?v=<?php echo time(); ?>"/>   
	<title>sign up</title>
</head>
<body>
	<main>
			<form class="comment" action="sign.php" method="post">
				<p class="title">Sign</p>

				<label for="uname" class="user">User Name:</label>
				<input type="text" name="username" placeholder="username" id="uname" class="name">

				<label for="pass" class="user">Password:</label>
				<input type="password" name="password1" placeholder="password" id="pass" class="name">

				<label for="pass" class="user">Repeat Pw:</label>
				<input type="password" name="password2" placeholder="password" id="pass" class="name">

				<input type="submit" name="submit" value="sign" class="btn1">

                <a class="lien" href="login.php">Login</a>
			</form>
	</main>

</body>
</html>
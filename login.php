<?php
session_start();

if (isset($_POST["logIn"])) {
	$connection = new mysqli("localhost", "root", "", "membershipSystem");

		$email = $connection->real_escape_string($_POST["email"]);
		$password = $connection->real_escape_string($_POST["password"]);
		
$data = $connection->query("SELECT firstName FROM users WHERE email='$email' AND password='$password'");
if ($data->num_rows > 0) {
	$_SESSION["email"] = $email;
	$_SESSION['loggedIn'] = 1;
	
	header("Location: register.php");
	exit();
}else {
	echo "Please check your inputs";
	}
}

?>
<!DOCTYPE html>
<head>
<meta charset= "utf-8">

</head>

<body>

	<form action="login.php" method="post">
	LOG IN
	<br><label> Email:<br>
<input type="text" name="email" placeholder="Email"> <br>
</label><br> 
<label>Šifra:<br>
<input type="password" name="password" placeholder="Password">
<input type="submit" value="LogIn" name="logIn">
</form>
</label>	
</div>
	</body>
</html>

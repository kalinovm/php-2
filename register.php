<!DOCTYPE html>
<head>
<title>Besplatna registracija</title>
<meta charset= "utf-8">

<link rel="stylesheet" type="text/css" href="naslovna strana.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>

<body>

<div id="wrapper">

	<header id="header">
	
	<div id="logo">
	<a href="Druga strana.php">
	<img src="besplatna registracija.png" alt="pas i macka" width="372" height="255">	</a>	</div>
	<div id="slogan">
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
	<?php
session_start();

if (isset($_POST["logIn"])) {
	$connection = new mysqli("localhost", "root", "membershipSystem");

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

</div>
	
	</header>
	<!-- end #header -->
	
	<nav id="nav">
	<ul>
		<li><a href="Naslovna strana.php"><i class="fab fa-grunt aria-hidden="true"></i> Kucni ljubimci</a>
		</li>
		<li><a href="Druga strana.php" target="_blank"><i class="far fa-smile aria-hidden="true"></i>
Pas ili macka </a></li>
		<li><a href="register.php" target="_blank"><i class="fa fa-question aria-hidden="true"></i> Log in / Registracija</a></li>
	<li><a href="connecct.php"><i class="fab fa-grunt aria-hidden="true"></i> Kućni ljubimci forum</a>
		</li>
	</ul>
	
	<div class="social">
	<a href="www.facebook.com" target="_blank"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
	<a href="www.twiter.com" target="_blank"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
	<a href="www.linkedin.com" target="_blank"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>
	</div>
	
	</nav><!-- end #nav -->
	<div id="main">
	
	<h1>Registracija</h1>
	<form action="register.php" method="post">
	<table border=1" width="354" height="196">
	<tr> <td><span class="style4">Ime:</span></td>
		<td><input type="text" name="firstName"></td></tr>
		<tr> <td><span class="style4">Prezime:</span></td>
		<td><input type="text" name="lastName"></td></tr>
	<tr> <td><span class="style4">Šifra:</span></td>
		<td><input type="password" name="password"></td></tr>
	<tr> <td><span class="style4">Email:</span></td>
		<td><input type="text" name="email"></td></tr>
	
	<tr> <td colspan="5" align="center"><input name="register" type="submit" class="style4" value="Registracija">
	</td>
</tr>
  </table>
</body></center>
</html>


<?php
if(isset($_POST["register"])){
	$connection = new mysqli("localhost", "root", "", "membershipSystem");
	$firstName = $connection->real_escape_string($_POST["firstName"]);
	$lastName = $connection->real_escape_string($_POST["lastName"]);
	$password = $connection->real_escape_string($_POST["password"]);
	$email = $connection->real_escape_string($_POST["email"]);
	
	$data = $connection->query("INSERT INTO users (firstName, lastName, password, email) VALUES ('$firstName', '$lastName', '$password', '$email')");
	
}
?>
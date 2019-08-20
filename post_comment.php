<!DOCTYPE html>
<head>
<title>Comment</title>
<meta charset= "utf-8">

<link rel="stylesheet" type="text/css" href="naslovna strana.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>

<body>
<div id="wrapper">

	<header id="header">
	
	<div id="logo">
	<a href="Druga strana.php">
	<img src="comment.jpg" alt="comment" width="372" height="255">	</a>	</div>
	<div id="slogan">
	FORUM
	</div>
	
	</header>
	
<nav id="nav">
	<ul>
		<li><a href="Naslovna strana.php"><i class="fab fa-grunt aria-hidden="true"></i> Kucni ljubimci</a>
		</li>
		<li><a href="Druga strana.php" target="_blank"><i class="far fa-smile aria-hidden="true"></i>
Pas ili macka </a></li>
		<li><a href="register.php" target="_blank"><i class="fa fa-question aria-hidden="true"></i> Log in / Registracija</a></li>
	<li><a href="index.php"><i class="fab fa-grunt aria-hidden="true"></i> Kućni ljubimci forum</a>
		</li>
	</ul>
	
	<div class="social">
	<a href="www.facebook.com" target="_blank"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
	<a href="www.twiter.com" target="_blank"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
	<a href="www.linkedin.com" target="_blank"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>
	</div>
	
	</nav>
	
<form action="connecct.php" method="POST">

<input type="text" name="name" value ="Your Name" ><br>
<textarea name="comment" cols="50" rows="2"></textarea><br>
<input type="submit" value="Comment">
</form>
</body>
</html>

<?php

mysql_connect("localhost", "root", "", "cmtdb")
mysql_select_db("cmtdb");
$find_comments = mysql_query("SELECT * FROM cmtdb");
while($row = mysql_fetch_assoc($find_comments))
{
	$comment_name = $row['name'];
	$comment = $row['comment'];
	
	echo "$comment_name - $comment<p>";
}
if(isset($_GET['error']))
{
	echo "<p>100 Character limit";
}
?>

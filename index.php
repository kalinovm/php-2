<html>
<head>
<title>Prodaja pasa</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="wrap">
	<div id="search">
	<img src="img/search.jpg">
	<a href="insert.php"><img src="img/add.png" height="50px" title="Dodaj psa"></a>
	<a href="remove.php"><img src="img/remove.png" height="50px" title="Ukloni psa"></a>
	<form action="#" method="GET">
		<input type="text" name="criteria" placeholder="rasa">
		<input type="submit" value="Search"><br/>
		</form>
	</div>
	<?php
	include 'inc/getResults.php';
	?>
</div>
</body>
</html>
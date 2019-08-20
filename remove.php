<html>
<head>
	<title>Prodaja pasa</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="wrap">
		<div id="search">
			<img src="img/remove.png">
			<a href="index.php"><img src="img/search.jpg" height="50px" title="Dodaj psa"></a>
			<a href="insert.php"><img src="img/add.png" height="50px" title="Search"></a>
			<?php
				require 'inc/connect.php';
				$query = "SELECT * FROM `kucni ljubimci`";
				$result = mysqli_query($conn, $query);
				if(mysqli_num_rows($result) > 0){
					while($row = mysqli_fetch_assoc($result)){
				?>
					<div id="result">
						<a href="inc/removekucni ljubimci.php?vrsta=<?php echo $row['vrsta'] ?>"><img src="img/remove.png"/></a>
						<p><b>Rasa: </b><?php echo $row['rasa'] . " " . $row['starost']; ?></p>
						<p><b>Poreklo: </b><?php echo $row['Poreklo'] . " " . $row['cena']; ?></p>
				</div>
			<?php
		}
	}else{
		echo " Nema rezultata";
	}
	?>
	</div>
</div>
</body>
</html>
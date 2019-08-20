<html>
<head>
<title>Prodaja pasa</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="wrap">
	<div id="search">
	<img src="img/add.png">
	<a href="index.php"><img src="img/search.jpg" height="50px" title="Dodaj psa"></a>
	<a href="remove.php"><img src="img/remove.png" height="50px" title="Ukloni psa"></a>
	<form action="#" method="POST">
	<label>Rasa psa<br/>
		<input type="text" name="rasa"></label><br/>
		<label>Starost psa<br/>
		<input type="number" name="starost"></label><br/>
		<label>Poreklo psa<br/>
		<input type="text" name="Poreklo"></label><br/>
		<label>Cena psa $<br/>
		<input type="number" name="cena"></label><br/>
		<input type="submit" name="insert" value="Dodaj"><br/>
		</form>
	</div>
	<div id="message">
		<?php
		if(isset($_POST['insert'])){
			if(isset($_POST['rasa']) && isset($_POST['starost']) && isset($_POST['Poreklo']) && isset($_POST['cena'])){
				if(!empty($_POST['rasa']) && !empty($_POST['starost']) && !empty($_POST['Poreklo']) && !empty($_POST['cena'])){
			$rasa = trim($_POST['rasa']);
			$starost = trim($_POST['starost']);
			$Poreklo = trim($_POST['Poreklo']);
			$cena = trim($_POST['cena']);
			require 'inc/connect.php';
			$rasa = mysqli_real_escape_string($conn, $rasa);
			$starost = mysqli_real_escape_string($conn, $starost);
			$Poreklo = mysqli_real_escape_string($conn, $Poreklo);
			$cena = mysqli_real_escape_string($conn, $cena);
			
			$query = "INSERT INTO `kucni ljubimci` (rasa, starost, Poreklo, cena) VALUES ('{$rasa}', '{$starost}', '{$Poreklo}', '{$cena}')";
			if(mysqli_query($conn, $query) === TRUE){
				echo "Uspesno dodato";
			}else {
				echo "Neuspesno dodato";
			}
			}else{
				echo "Svi parametri moraju biti popunjeni";
			}
			}else{
				echo "Svi parametri moraju biti uneti";
			}
		}
		?>
	</div>
</div>
</body>
</html>








<?php
		$host = "localhost";
		$name = "root";
		$password = "";
		$dbname = "prodaja zivotinja";
		
$conn = mysqli_connect("$host","$name","$password","$dbname");

if(!$conn){
	die("Connection faild: " . mysqli_connect_error());
}
?>
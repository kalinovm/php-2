<?php
if(isset($_GET['vrsta'])){
	$vrsta = $_GET['vrsta'];
	require 'connect.php';
	$query = "DELETE FROM `kucni ljubimci` WHERE vrsta = {$vrsta}";
	mysqli_query($conn, $query);
	header("location: ../remove.php");
}
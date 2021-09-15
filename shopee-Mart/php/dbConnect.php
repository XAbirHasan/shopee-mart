<?php
try{
	$conn = new PDO("mysql:host=localhost;dbname=shopeemart;","root","");
}
catch(PDOException $err){
	echo "<script>window.alert('db connection error');</script>";
	include 'logout.php'; 
	echo "<script>location.assign('../index.php');</script>";
}
?>
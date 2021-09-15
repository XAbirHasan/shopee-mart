<?php 
	$InputName="";
	$InputLastname="";
	$InputEmail1="";
	$InputPassword1="";
	
	if( isset($_POST['InputName']) ){
		$InputName = $_POST['InputName'];
	}
	if( isset($_POST['InputLastname']) ){
		$InputLastname = $_POST['InputLastname'];
	}
	if( isset($_POST['InputEmail1']) ){
		$InputEmail1 = $_POST['InputEmail1'];
	}
	if( isset($_POST['InputPassword1']) ){
		$InputPassword1 = $_POST['InputPassword1'];
	}
	

	try{
        $conn = new PDO("mysql:host=localhost;dbname=shopeemart;","root","");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sqlquery = "INSERT INTO user (fName, lName, email, password) VALUES ('$InputName', '$InputLastname', '$InputEmail1', '$InputPassword1')";
        // echo $sqlquery;
        $conn->exec($sqlquery);
        echo "<script>window.alert('...successfully signed up...');</script>";
        echo "<script>location.assign('../../index.php');</script>";
	}
	catch(PDOException $err){
		echo "<script>window.alert('db connection error');</script>";
	}

 ?>
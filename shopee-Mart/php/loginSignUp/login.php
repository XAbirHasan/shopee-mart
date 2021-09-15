<?php 

	$email="";
	$password="";

	if(isset($_POST['InputEmail'])){
        $email = $_POST['InputEmail'];
	}
	if(isset($_POST['InputPassword'])){
		$password = $_POST['InputPassword'];
	}

	try{
		$conn = new PDO("mysql:host=localhost;dbname=shopeemart;","root","");

		$sqlquery="SELECT * FROM user WHERE email='$email' AND password='$password'";

		$object=$conn->query($sqlquery);
		$row = $object->rowCount();
		if($row==1){
			session_start();
			foreach ($object as $collum ) {
				$_SESSION['user_id']=$collum['id'];
			}
			
			$_SESSION['user_email'] = $email;
			echo "<script>window.alert('...successfully loged in...');</script>";
			echo "<script>location.assign('../../index.php');</script>";
			
		}
		else{
			// echo "$row";
			echo "<script>window.alert('Wrong info..! try again');</script>";
			echo "<script>location.assign('../../index.php');</script>";
		}
	}
	catch(PDOException $err){
		echo "<script>window.alert('db connection error');</script>";
		echo "<script>location.assign('../../index.php');</script>";
	}

 ?>
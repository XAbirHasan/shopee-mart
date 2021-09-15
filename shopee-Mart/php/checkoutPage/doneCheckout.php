<?php 
    // checkout table

	$totalPrice="";
	$userid="";
    $productid=0;

    session_start();
    $userid = $_SESSION['user_id'];

    if( isset($_POST['total']) ){
		$totalPrice = $_POST['total'];
	}

    // billing address table
    $fName="";
	$lName="";
    $email="";
    $address="";
    $payment=$totalPrice;
	
	if( isset($_POST['firstName']) ){
		$fName = $_POST['firstName'];
	}
	if( isset($_POST['lastName']) ){
		$lName = $_POST['lastName'];
	}
	if( isset($_POST['email']) ){
		$email = $_POST['email'];
	}
	if( isset($_POST['address']) ){
		$address = $_POST['address'];
	}
	

	try{
        $conn = new PDO("mysql:host=localhost;dbname=shopeemart;","root","");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sqlquery = "INSERT INTO checkout (date, totalPrice, userid, productid) VALUES (CURRENT_DATE(), '$totalPrice', '$userid', '$productid')";
        //echo $sqlquery;
        $conn->exec($sqlquery);

        $sqlquery2 = "INSERT INTO billingaddress (fName, lName, email, address, payment, userid) VALUES ('$fName', '$lName', '$email', '$address', '$payment', '$userid')";
        //echo $sqlquery;
        $conn->exec($sqlquery2);

        echo "<script>window.alert('...Thanks for shopping...');</script>";
        echo "<script>location.assign('../../index.php');</script>";
	}
	catch(PDOException $err){
		echo "<script>window.alert('db connection error');</script>";
	}

 ?>
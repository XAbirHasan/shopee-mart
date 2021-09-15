<?php 
    session_start();
    $user_id = $_SESSION['user_id'];
    $p_id="";
    $pageInfo="";
    
	if( isset($_POST['p_id']) ){
		$p_id = $_POST['p_id'];
    }
    if( isset($_POST['pageInfo']) ){
		$pageInfo = $_POST['pageInfo'];
	}

	try{
        $conn = new PDO("mysql:host=localhost;dbname=shopeemart;","root","");

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sqlquery = "INSERT INTO cart (productid, userid) VALUES ('$p_id', '$user_id')";
        // echo $sqlquery;
        $conn->exec($sqlquery);
        echo "<script>window.alert('...successfully added...');</script>";

        if($pageInfo == "men"){
            echo "<script>location.assign('../../shop.php');</script>";
        }
        if($pageInfo == "women"){
            echo "<script>location.assign('../../shop-women.php');</script>";
        }
        if($pageInfo == "kids"){
            echo "<script>location.assign('../../shop-kids.php');</script>";
        }
        if($pageInfo == "mobile"){
            echo "<script>location.assign('../../shop-mobile.php');</script>";
        }
        if($pageInfo == "laptop"){
            echo "<script>location.assign('../../shop-laptop.php');</script>";
        }
	}
	catch(PDOException $err){
        // echo $p_id;
        // echo $pageInfo;
        // echo $user_id;
		echo "<script>window.alert('db connection error');</script>";
	}

 ?>
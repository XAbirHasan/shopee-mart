<?php 
	// remove all session variables
	session_unset(); 

	// destroy the session 
	session_destroy();  
	
	echo "<script>window.alert('...loged out...');</script>";
	echo "<script>location.assign('../index.php');</script>";
?>
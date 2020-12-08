<?php

	$con = mysqli_connect("localhost", "root", "", "test");
	 	if(mysqli_connect_errno()){ echo "db connection failed".mysqli_connect_errno();}
	  	if(isset($_POST['submit'])){
	 		echo "subit triggered";
	 		$quan = $_POST['quantity']; 
	 		$mob = $_POST['mobile'];    
	 		$addr = $_POST['address']; 
	 		
	 		$sql = "INSERT INTO `order` VALUES($quan,'$mob','$addr')";
	 		//die();
	 		$query_insert = mysqli_query($con, $sql);	 		
 			if($query_insert){ 
 				echo "inserted";
 			}
 			else echo " insertion failed";
	 	}
?>
<?php

	$con = mysqli_connect("localhost", "root", "", "test");
	 	if(mysqli_connect_errno()){
	 		die();
	 	}

	$rows= mysqli_query($con, "SELECT * FROM `order` ");	
	$data_array = [];
	if($rows->num_rows > 0){
		while($r = $rows->fetch_assoc()) {
			// $temp['address'] = $r['address'];
			// $temp['quantity'] = $r['quantity'];
			// $temp['mobile'] = $r['mobile'];
			// print_r($r);
			// echo "<br>";
			// var_dump($r) ;
			// echo $r['address'];			
			array_push($data_array, $r);
		}

	}
	echo json_encode(array("status" => 200, "message" =>"Order Retrieved Bhai","data" => $data_array));

?>

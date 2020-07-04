<?php

	$con = mysqli_connect('localhost', 'root', '');
	
	if(!$con){
		echo 'Failed to connect to Server';
	}
	
	if(!mysqli_select_db($con,'orders')){
		echo 'Database Not Selected';
	}
	
	$FName = $_POST['FName'];
	$LName = $_POST['LName'];
	$CNum = $_POST['CNum'];
	$Address = $_POST['Address'];
	$COrders = $_POST['COrders'];
	
	$sql="insert into orders(FName, LName, CNum, Address) 
	VALUES ('$FName', '$LName', '$CNum', '$Address', '$COrders')";
	
	if(!mysqli_query($con, $sql)){
		echo 'Not Inserted';
	}
	
	else{
		echo 'Message is Inserted';
	}
	
	header("refresh: 2; url=orders Page.html");
	
?>






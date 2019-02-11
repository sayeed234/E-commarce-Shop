<?php
include 'connection.php';

if (isset($_POST['submit'])) {
	$name  = $_POST['name'];
	$quantity  = $_POST['quantity'];
	$date  = $_POST['date'];
	$msg  = $_POST['message'];
	
	if($conn->connect_error){
		echo "Connection failed";
	}else{
		$sql = "INSERT INTO order_food(name, quantity, time ,message) values('$name', '$quantity', '$date', '$msg')";
		$result = mysqli_query($conn,$sql);
		if(!$result){
			echo "<script type='text/javaScript'>
						alert(\"Not insert data into database\")</script>";
		}else{
			echo "<script type='text/javaScript'>
						alert(\"successfully insert data into database\")</script>";
			header("location:bacon.php");
		}
	}
	
}

?>
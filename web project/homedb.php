<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<?php
include 'connection.php';

if (isset($_POST['submit'])) {
	$name  = $_POST['name'];
	$email  = $_POST['email'];
	$phone  = $_POST['Phone'];
	$pass  = $_POST['password'];
	
	if($conn->connect_error){
		echo "Connection failed";
	}else{
		$sql = "INSERT INTO signup(name, email, Phone ,password) values('$name', '$email', '$phone', '$pass')";
		$result = mysqli_query($conn, $sql);
		if(!$result){
			echo "<script type='text/javaScript'>
						alert(\"Not insert data into database\")</script>";
		}else{
			echo "<script type='text/javaScript'>
						alert(\"successfully insert data into database\")</script>";
			header("location:home.php");
		}
	}
	
}

?>
</body>
</html>
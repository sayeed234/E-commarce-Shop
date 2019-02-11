<?php
	
	include 'connection.php';
	
	
	if(isset($_POST['login']))
    {     

        $name = $_POST['uname']; 
        $password = $_POST['psw']; 
		$sql =  "SELECT email, password FROM signup WHERE email = '".$name."' AND  password = '".$password."'";
        $result = mysqli_query($conn, $sql);

        if( mysqli_num_rows($result) > 0 )
        { 
			echo 'successfully login';
			header("location:home.php");
        }
        else
        {
            echo 'The username or password are incorrect!';
        }
	}
	
	/*$username = $_POST['uname'];
	$userpass = $_POST['Password'];
	
	if($conn->connect_error){
		echo "Connection failed";
	}else{
		$sql = "SELECT 'email' from signup WHERE 'email'='$username'";
		$result = mysqli_query($conn, $sql);
		if(!$result){
			echo "<script type='text/javaScript'>
						alert(\"error\")</script>";
		}else{
			echo "<script type='text/javaScript'>
						alert(\"result\")</script>";
		}
		
	}*/

?>
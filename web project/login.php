
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 7px solid #f1f1f1;}

input[type=text], input[type=password] {
    width: 47%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 11px 11px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 7%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.man{
	
	float: right;
}
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    border-radius:77px;
    background-color: #7FFFD4;
    padding: 50px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body>

<h2 style="text-align">Login Form</h2>

<form action="logindb.php" method="post">
 
  <div class="container">
  <div>
 
  <div class="man">
</div>

  <div >
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
	<br>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
</div>

    <button type="submit" name="login" style="margin-left: 81px">Login</button>
	<label>
   <button type="button" class="cancelbtn">Cancel</button>
  </label>

    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
	
  
  </div>
  

  <div class="containers" style="background-color:#f1f1f1">
   
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
  
  </div>
  
</form>

</body>
</html>

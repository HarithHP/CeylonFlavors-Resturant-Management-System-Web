<!DOCTYPE html>
<?php 

$conn =  new mysqli('localhost','root','','ceylonflavors');
if ($conn->connect_error)
{
die('Connection failed: '.$conn->connect_error);
}
if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from admin where ad_name='".$uname."'AND ad_pw='".$password."' LIMIT 1";
    
    $result=$conn->query($sql);
    
    if($result->num_rows>0){
    	echo(" Log in Successful. <a href='food_order/admin.html'>Click here to continue</a> ");
    	exit();

        
     }   
    else{
        echo(" You Have Entered Incorrect Username or Password<a href='login.php'>Click here to try again</a>");
        exit();
    }
}
?>

<html>
<head>
	<title> Login Form</title>
	<link rel="stylesheet" a href="food_order/css/loginstyle.css">
	<style>
body {
  		background-image: url('food_order/images/bg.jpg');
	}
</style>
	
</head>
<body>
	<div class="container">
	<img src="food_order/images/login.png"/>
		<form method="POST" action="login.php">
			<div class="form-input">
				<input type="text" name="username" placeholder="Enter the User Name"/>	
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="password"/>
			</div>
			<input href="admin.html" type="submit" type="submit" value="LOGIN" class="btn-login"/>
		</form>
	</div>
</body>
</html>
<?php
	require_once('conect.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<title>SIGNUP_PAGE</title>
		<link type="text/css" href="../css/signup.css" rel="stylesheet">
		<style>
			#grad1{
				background-image: linear-gradient(to bottom right,#000a12,#3e2723);
			}
		</style>
	</head>  
	<body id="grad1">
		<div class="wrapper"> 
			<div class="topbar">
				<ul>
					<li><a href="home.html">Home</a></li>
					<li><a href="###">About us</a></li>
					<li><a href="###">News</a></li>
					<li><a href="../html/login.html">Login</a></li>
					<li><a href="signup.php">Sign up</a></li>
				</ul>
			</div> <!--top navgation bar-->
			<div class="image1">
				<img src="../img/login2.png" width="450" height="450">
			</div> <!--login page image-->
			<div class="loginform">
				<form method="POST">
					<h2>SIGN UP</h2>
					<hr>
				<div class="text1">
					<!-- <label>user name</label> -->
					<input type="text" name="uname" placeholder="user name" required>
				</div>
				</br>
				<div class="text2">
					<!-- <label>Password</label> -->
					<input type="text" name="passwrd" placeholder="password" required>
                </div>
				<div class="text3">
					<!-- <label>Password</label> -->
					<input type="text" name="email" placeholder="email" required>
                </div>
				<div class="text4">
					<!-- <label>Password</label> -->
					<input type="text" name="locations" placeholder="location" required>
                </div>
				<div class="text5">
					<select name="options">
						<option value="customer">CUSTOMER</option>
						<option value="operator">OPERATOR</option>
					</select>
				</div>
				<div class="text6">
					<!-- <label>Password</label> -->
					<input type="text" name="mobile" placeholder="Contact No" required>
				</div>
				<div class="submitbtn1">
					<!-- <input type="submit"> -->
					<button name="confirm">CONFIRM</button>
				</div>
				<hr>
				</form> <!--signup form close-->
			</div>
		</div>
<?php 
		if(isset($_POST["confirm"])){
        
            $sql = "INSERT INTO `users` (`uname`, `passwrd`, `options`, `email`, `locations`, `contactNo`) VALUES ('".$_POST['uname']."','".$_POST['passwrd']."','".$_POST['options']."','".$_POST['email']."','".$_POST['locations']."','".$_POST['mobile']."')";
            $result = mysqli_query($connection,$sql);

            if($result)
                echo"<script> confirm('Do you really want to submit details') </script>";
            else
                echo"failed";
        }

?>
	</body>
</html>
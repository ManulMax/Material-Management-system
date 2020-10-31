<!DOCTYPE html>
<html>
	<head>
		<title>LOGIN_PAGE</title>
		<link type="text/css" href="./css/login.css" rel="stylesheet">
        <link href="../css/Hover-master/css/hover-min.css" rel="stylesheet">        
		<style>
			#grad1{
				background-image: linear-gradient(to bottom right,#000a12,#37474f);
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
					<li><a href="login.html">Login</a></li>
					<li><a href="../php/signup.php">Sign up</a></li>
				</ul>
			</div> <!--top navgation bar-->
			<div class="image1 hvr-pop">
				<img src="./img/login.png" width="450" height="450">
			</div> <!--login page image-->
			<div class="loginform">
				<form method="POST" action="../php/login.php">
					<h2>SIGN IN</h2>
					<hr>
				<div class="text1">
					<!-- <label>user name</label> -->
					<input type="text" name="name" placeholder="user name" required>
				</div>
				</br>
				<div class="text2">
					<!-- <label>Password</label> -->
					<input type="password" name="Password" placeholder="password" required>
				</div>
				<div class="text3">
					<select name="option">
						<option value="admin">ADMIN LOGIN</option>
						<option value="customer">CUSTOMER LOGIN</option>
						<option value="operator">OPERATOR LOGIN</option>
					</select>
				</div>
				<div class="submitbtn1 hvr-shadow">
					<input type="submit" name="login">
					<!-- <button>SIGN IN</button> -->
				</div>
					<hr>
					<h3>Don't have an account? </br> signup here </h3>
				</form> <!--login form-->
				<div class="submitbtn2 hvr-shadow">
					<!-- <input type="submit"> -->
					<button><a href="./php/signup.php" name="signup">SIGN UP</a></button>
				</div> <!-- submitbutton -->
			</div>
		</div>
	</body>
</html>
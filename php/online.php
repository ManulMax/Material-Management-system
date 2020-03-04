<?php 
    require_once('connect2.php'); 
?>

<html>
    <head>
        <title>online_payment</title>
        <link type="text/css" href="../css/online.css" rel="stylesheet">
		<style>
			#grad1{
				background-image: linear-gradient(to bottom right,darkblue,purple);
			}
		</style>
    </head>

    <body id="grad1">
        <div class="wrapper">
            <div class="leftnavi">
            <div class="logo">
                <!-- <img src="../img/logo.png" width="70px" height="50px"> -->
                </div>
                <!-- company logo -->
                <!-- <label>CUSTOMER DASHBOARD</label> -->
                <div class="links">
                    <ul>
                        <li><a href="home.html" >Home</a></li>
                        <li><a href="aboutUs.html">About Us</a></li>
                        <li><a href="reviews.html">Reviews</a></li>
                        <li><a href="login.html">Logout</a></li>
                        <li><a href="online_payment.html">Online Payment</a></li>
                    </ul>
                </div>
                <!-- links bar -->
            </div> <!--left navi menu-->
        <div class="onlineform">
            <form>
                <h2><font color="white">ONLINE PAYMENT</font></h2>
                <input type="text" name="cardno" placeholder="Card number" required><br><br>
                <input type="text" name="name" placeholder="Name on card" required><br><br>
                <input type="text" name="expDate" placeholder="Expiration (MM/YY)" required><br><br>
                <input type="text" name="cvv" placeholder="CVV" required><br><br>
                <b><font color="white">Total Amount</font></b><input type="text" name="total" value="###"><br><br><br><br>
                <div class="order">
                    <button name="Order" value="Order">Order</button>
                </div>
            </form>
        </div>
    </div>
    </body>
</html>

<?php


// add items to db

	if(isset($_POST['Order'])){

	$cardNo=$_POST["cardno"];
	$nameOnCard=$_POST["name"];
	$expiration=$_POST["expDate"];
	$CVV=$_POST["cvv"];
	
	
	
	$sql = "INSERT INTO details (cardNo, nameOnCard, expiration, CVV) VALUES ('$cardNo','$nameOnCard','$expiration','$CVV')";

	$result = mysqli_query($connection,$sql);
	print_r($result);
	die();
	if($result)
		echo"<script> alert('ADDED SUCESSFULLY') </script>";
	else
		echo"failed";

}
?>
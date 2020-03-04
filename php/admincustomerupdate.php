<?php require_once('../dbc/conect.php'); ?>

<?php
if(isset($_POST['update'])){
    //die('hello');
    // $sql3 = "select * from customer";
    // die($sql3);
	$sql2 = "UPDATE users SET userid = '".$_POST['userid']."',uname = '".$_POST['uname']."',passwrd = '".$_POST['passwrd']."',options = '".$_POST['options']."',email = '".$_POST['email']."',contactNo = '".$_POST['contactNo']."',locations = '".$_POST['locations']."' where userid = " . $_POST['userid'];
    // echo $sql2;
    // die();
    $result2 = mysqli_query($connection,$sql2);
}
?> 
<?php
    $sql5="SELECT * FROM users WHERE userid ='2' ";
?>
<html>
    <head>
        <link rel="stylesheet" href="../css/admincustomer.css">
    </head>
    <body>
        <div class="content">
            <form action="" method="POST"> 
                <h2 >CUSTOMER</h2>
                <label>CUSTOMER ID </label><br />
                <?php
                echo "<input type='text' name='userid' value='".$row['userid']."'  class='txtbox' required />";
                // <br /><br />
                // "<label class="lbl">NAME </label><br />
                // <input id="lbl" type="text" name="uname"  value=".$row['uname']."class="txtbox"  />
                // <br /> 
                // <label class="lbl">PASSWORD </label><br />
                // <input type="text" name="passwrd" value=".$row['passwrd']." class="txtbox"  />
                // <br /> 
                // <input type="text" name="options"  value=".$row['options']." class="txtbox"  />
                // <br /> 
                // <label class="lbl">CONTAC DETAILS </label><br /> 
                // <input type="email" name="email"  value=".$row['email']." class="txtbox"  />
                // <br /> 
                // <input type="text" name="locations" value=".$row['locations']." class="txtbox"  />
                // <br />
                // <input type="text" name="contactNo"  value=".$row['contactNo']." class="txtbox"  />"
                ?>
                <br /><br /><br /><br /><br /><br /><br /><br />
                <input type="submit" value="ADD" name="add">
                <input type="submit" value="DELETE" name="delete">
                <input type="submit" value="UPDATE" name="update">
                <a href="admincustomerview.php" target="myFrame"> <input type="button" value="VIEW" name="search"></a>
            </form>
        </div>
    </body>
</html>
<?php
	if(isset($_POST['add'])){

	$sql = "INSERT INTO users (userid,uname,passwrd,options,email,locations,contactNo) VALUES ('".$_POST['userid']."','".$_POST['uname']."','".$_POST['passwrd']."','".$_POST['options']."','".$_POST['email']."','".$_POST['locations']."','".$_POST['contactNo']."')";

	$result = mysqli_query($connection,$sql);
	if($result)
echo"<script> alert('Registered Sucessfully') </script>";
else
echo"failed";

}

?>

<?php
if(isset($_POST['delete'])){
$sql = "DELETE FROM users WHERE userid = ".$_POST['userid'];
mysqli_query($connection, $sql);
$result = mysqli_query($connection,$sql);
if($result){
//echo "Sucessfull";
}
else{

}

}
?>



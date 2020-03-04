<?php require_once('../dbc/conect.php'); ?>

<?php
if(isset($_POST['update'])){
	$sql2 = "UPDATE users SET userid = '".$_POST['userid']."',uname = '".$_POST['uname']."',passwrd = '".$_POST['passwrd']."',options = '".$_POST['options']."',email = '".$_POST['email']."',contactNo = '".$_POST['contactNo']."',locations = '".$_POST['locations']."' where userid = '".$_POST['userid']."' AND options='".$_POST['options']."'" ;
    $result2 = mysqli_query($connection,$sql2);
}
?> 

<html>
    <head>
        <link rel="stylesheet" href="../css/admincustomer.css">
    </head>
    <body>
        <div class="content">
            <form action="" method="POST"> 
                <h2 >SUPLIER</h2>
                <label>SUPLIER ID </label><br />
                <input type="text" name="userid" placeholder="Suplier Id" class="txtbox" required/>
                <br /><br />
                <label class="lbl">NAME </label><br />
                <input id="lbl" type="text" name="uname" placeholder="First name" class="txtbox"  />
                <br /> 
                <label class="lbl">PASSWORD </label><br />
                <input type="text" name="passwrd" placeholder="Password" class="txtbox"  />
                <br /> <br /><br />
                <label class="lbl">OPTION</label><br />
                <input type="text" name="options" value="suplier" placeholder="option"class="txtbox"  />
                <br /> <br />
                <label class="lbl">CONTAC DETAILS </label><br /> 
                <input type="email" name="email" placeholder="Email"class="txtbox"  />
                <br /> 
                <input type="text" name="locations" placeholder="location" class="txtbox"  />
                <br />
                <input type="text" name="contactNo" placeholder="Mobile Number" class="txtbox"  />
                <br /><br /><br />
                <input type="submit" value="ADD" name="add">
                <input type="submit" value="DELETE" name="delete">
                <input type="submit" value="UPDATE" name="update">
                <a href="adminsuplierview.php" target="myFrame"> <input type="button" value="VIEW" name="search"></a>
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
$sql = "DELETE FROM users WHERE userid = '".$_POST['userid']."' AND options='".$_POST['options']."'";
mysqli_query($connection, $sql);
$result = mysqli_query($connection,$sql);
if($result){
//echo "Sucessfull";
}
else{

}

}
?>



<?php require_once('../dbc/conect.php'); ?>
<html>
    <head>
        <link rel="stylesheet" href="../css/adminorder.css">
    </head>
    <body>
        <div class="content">
            <form action="" method="POST"> 
                <h2 >ODER INFOMANTION</h2><br/>
                <table cellpadding="10px">
                    <tr>
                        <td><label class="lbl">ODER ID</label></td>
                        <td><input type="text" name="order_id" placeholder="Oder Id" class="txtbox"/></td>
                        <td><label class="lbl">TYPES </label></td>
                        <td><input type="text" name="types" placeholder="types" class="txtbox"/></td>
                    </tr>
                    <tr>
                        <td><label class="lbl">QUANTITY</label></td>
                        <td> <input id="lbl" type="text" name="qty" placeholder="Item ID" class="txtbox"/></td>
                        <td><label class="lbl">COLOR </label><br /></td>
                        <td><input type="text" name="color" placeholder="color" class="txtbox"/></td>
                    </tr>
                    <tr>
                        <td><label class="lbl">LOCATION </label></td>
                        <td>  <input type="text" name="locations" placeholder="Quantity"class="txtbox" /></td>
                        <td><label class="lbl">THICKESS </label><br /></td>
                        <td><input type="text" name="thickness" placeholder="Thickness" class="txtbox"/></td>
                    </tr>
                    <tr>
                        <td><label class="lbl">CONTACT_NUMBER </label></td>
                        <td> <input type="text" name="contact" placeholder="Mobile Number" class="txtbox"/></td>
                        <td><label class="lbl">TOTAL_PRICE </label></td>
                        <td><input type="text" name="total_price" placeholder="Total_price" class="txtbox"/></td>
                    </tr>
                    <tr>
                        <td><label class="lbl">CATERGORY</label><br /></td>
                        <td> <input type="text" name="category" placeholder="Catrgory"class="txtbox" /></td>
                        <td><label class="lbl">DATES </label></td>
                        <td><input type="text" name="dates" placeholder="yyy/mm/dd" class="txtbox"/></td>
                    </tr>
                </table>
                <br/><br /><br />
                
                <input type="submit" value="ADD" name="add">
                <input type="submit" value="DELETE" name="delete">
                <input type="submit" value="UPDATE" name="update">
                <a href="adminorderview.php" target="myFrame"><input type="button" value="SEARCH" >
            </form>
        </div>
    </body>
</html>

<?php
	if(isset($_POST['add'])){

        $sql = "INSERT INTO `orders`(`order_id`,`qty`,`locations`,`contact`, `category`,`types`,`color`,`thickness`,`total_price`,`dates`) VALUES ('".$_POST['order_id']."','".$_POST['qty']."','".$_POST['locations']."','".$_POST['contact']."','".$_POST['category']."','".$_POST['types']."','".$_POST['color']."','".$_POST['thickness']."','".$_POST['total_price']."','".$_POST['dates']."')";

	$result = mysqli_query($connection,$sql);
	if($result)
echo"<script> alert('Registered Sucessfully') </script>";
else
echo"failed order";

}

?>
<?php
 if(isset($_POST['delete']))
 {
     $sql="DELETE FROM `orders` WHERE order_id='".$_POST['order_id']."'";
     $resul=mysqli_query($connection,$sql);
 }
 ?>
<?php
if(isset($_POST['update'])){
	$sql2 = "UPDATE `orders` SET `order_id` = '".$_POST['order_id']."',`qty` = '".$_POST['qty']."',`locations` = '".$_POST['locations']."',`contact` = '".$_POST['contact']."',`category` = '".$_POST['category']."',`types` = '".$_POST['types']."',`color` = '".$_POST['color']."',`thickness` = '".$_POST['thickness']."' ,`total_price` = '".$_POST['total_price']."',`dates` = '".$_POST['dates']."' WHERE `order_id` = '".$_POST['order_id']."'" ;
    $result2 = mysqli_query($connection,$sql2);
}
?>

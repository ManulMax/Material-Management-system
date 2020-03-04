<?php require_once('../dbc/conect.php'); ?>
<html>
    <head>
        <link rel="stylesheet" href="../css/adminstock.css">
    </head>
    <body>
        <div class="content">
            <form action="" method="POST"> 
                <h2 >STOCK</h2>
                <label>ITEM ID </label><br />
                <input type="text" name="item_id" placeholder="Item  Id" class="txtbox"/>
                <br /><br />
                <label class="lbl">ITEM NAME </label><br />
                <input id="lbl" type="text" name="item_name" placeholder="Item Name" class="txtbox"/>
                <br />
                <label class="lbl">ITEM TYPE </label><br />
                <input type="text" name="item_type" placeholder="Type" class="txtbox"/>
                <br /> 
                
                <label class="lbl">QUANTITY</label><br />
                <input type="text" name="quantity" placeholder="Quantity" class="txtbox"/>
                <br />
                <label class="lbl">UNIT PRICE </label><br />
                <input type="text" name="unit_price" placeholder="Unit Price" class="txtbox"/>
                <br /><br /><br /><br /><br />
                <input type="submit" value="ADD" name="add">
                <input type="submit" value="DELETE" name="delete">
                <input type="submit" value="UPDATE" name="update">
                <a href="adminstockview.php" target="myFrame"> <input type="button" value="VIEW" name="search"></a>
            </form>
        </div>
    </body>
</html>

<?php
	if(isset($_POST['add'])){

        $sql = "INSERT INTO stock (item_id,item_name,item_type,quantity,unit_price) VALUES ('".$_POST['item_id']."','".$_POST['item_name']."','".$_POST['item_type']."','".$_POST['quantity']."','".$_POST['unit_price']."')";

	$result = mysqli_query($connection,$sql);
	if($result)
echo"<script> alert('Registered Sucessfully') </script>";
else
echo"failed stock";

}

?>
<?php
if(isset($_POST['delete'])){
$sql = "DELETE FROM stock WHERE item_id = ".$_POST['item_id'];
mysqli_query($connection, $sql);
$result = mysqli_query($connection,$sql);
if($result){
echo "<script> alert('DELETED') </script>";
}
else{
    echo"<script> alert('EORR [DELETE!]') </script>";
}

}
?>
<?php
if(isset($_POST['update'])){
	$sql = "UPDATE stock SET item_id = '".$_POST['item_id']."',item_name = '".$_POST['item_name']."',item_type = '".$_POST['item_type']."',quantity = '".$_POST['quantity']."',unit_price = '".$_POST['unit_price']."' where item_id = ".$_POST['item_id'];
    // echo $sql2;
    // die();
    $result2 = mysqli_query($connection,$sql);
}
?> 
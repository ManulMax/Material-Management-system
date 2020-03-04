<?php require_once('conect.php'); ?>
<?php 
if(isset($_GET['item_id'])){
  $sqlx = "SELECT * FROM stock WHERE item_id =".$_GET['item_id'];
  $resultx = mysqli_query($connection,$sqlx);
  $row=mysqli_fetch_assoc($resultx);
  if($resultx){
  
  }
  //echo "Sucessfull";
  else{
  echo"failed";	
  }
  
  }
  
if(isset($_POST['update'])){
    $sqly = "UPDATE stock SET item_name = '".$_POST['item_name']."',item_id = '".$_POST['item_id']."',quantity = '".$_POST['item_id']."',unit_price = '".$_POST['unit_price']."' WHERE item_id ='".$_POST['item_id']."'";
  $resulty = mysqli_query($connection,$sqly);
  
  $sqlz = "SELECT * FROM stock WHERE item_id =".$_POST['item_id'];
  $resultz = mysqli_query($connection,$sqlz);
  $row=mysqli_fetch_assoc($resultz);
  echo"<script> alert('Updated Sucessfully') </script>";
  
  }
  if(!isset($_GET['item_id'])&&!isset($_POST['update'])){
  header("Location: viewstock.php");
  }

?>
<!DOCTYPE html>
<html>
    <head>
        <title>STOCK DETAILS</title>
        <link rel="stylesheet" href="../css/stocks.css" type="text/css">
        <link href="../css/Hover-master/css/hover-min.css" rel="stylesheet">

        <style>
            input[type=text], select {
              width: 90%;
              padding: 12px 20px;
              margin: 8px 50px 10px 50px;
              display: inline-block;
              border: 1px solid #ccc;
              border-radius: 4px;
              box-sizing: border-box;
            }
            
            input[type=submit] {
              width: 26%;
              background-color:#07547a;
              color: white;
              padding: 14px 20px;
              margin: 8px 30px 10px 50px;
              border: none;
              border-radius: 4px;
              cursor: pointer;
            }
            button[type=button] {
              width: 26%;
              background-color:#07547a;
              color: white;
              padding: 14px 20px;
              margin: 8px 30px 10px 50px;
              border: none;
              border-radius: 4px;
              cursor: pointer;
            }
            </style>


    </head>
    <body>
        <div class="wrapper">
            <div class="topbar">
                <a href="operator.php"><img src="../img/backarr.png" width="30px" height="30p" class="hvr-float shadow"></a> 
                <h1 align="center">   STOCK</h1>
            </div>
            <!-- top bar -->
            <!-- <h3>_________________EDIT STOCK DETAILS HERE________________</h3> -->

            <div class="form">
              <form action='stock.php' method ='POST'>

                <!-- text areas -->
              <?php
                echo "<label>ITEM ID</label>";
                echo "<input type='text' name='item_id' placeholder='Item ID...' required value =".$row['item_id']." readonly>";
                echo "<label>ITEM NAME</label>";
                echo "<input type='text' name='item_name' placeholder='Item Name...' required value =".$row['item_name']." readonly>";
                echo "<label>TYPE</label>";
                echo "<input type='text' name='item_type' placeholder='Item Type...'  value =".$row['item_type']." >";
                echo "<label>QUANTITY</label>";
                echo "<input type='text' name='quantity' placeholder='QUANTITY' required value =".$row['quantity']." >";
                echo "<label>UNIT PRICE</label>";
                echo "<input type='text' name='unit_price' placeholder='Unit Price(Rs)' required value =".$row['unit_price']." >";
              
              ?>
                <!-- buttons -->
                <input type="submit" value="Update" name='update'>
                <input type="submit" value="Add New" name='add'>
                <a href="viewstock.php"><button type="button" class="submit">View</button></a>
              </form>
            </div>
        </div>
        <!-- page wrapper -->
    </body>
</html>

<!-- add items to db -->
<?php
	if(isset($_POST['add'])){

	$sql = "INSERT INTO `stock` (`item_id`, `item_name`, `item_type`, `quantity`, `unit_price`) VALUES ('".$_POST['item_id']."','".$_POST['item_name']."','".$_POST['item_type']."','".$_POST['quantity']."','".$_POST['unit_price']."')";

	$result = mysqli_query($connection,$sql);
	if($result)
  echo"<script> alert('ADDED SUCESSFULLY') </script>";
  else
  echo"failed";

}

// update items
  // if(isset($_GET['item_name'])){
  //   $sql1 = "SELECT * FROM stock WHERE item_name='".$_GET['item_name']."'";
  //   $result=mysqli_query($connection,$sql1);
  //   $row=mysqli_fetch_assoc($result);
  // }

  // if (isset($_POST['update'])){
  //   $sql2= "UPDATE stock SET item_type = '".$_POST['item_type']."',quantity='".$_POST['quantity']."',unit_price='".$_POST['unit_price']."' WHERE item_id='".$_POST['item_id']."'";
  //   $result2=mysqli_query($connection,$sql2);

  //   $sql3="SELECT * FROM stock WHERE item_id='".$_POST['item_id']."'";
  //   $result3=mysqli_query($connection,$sql3);
  //   $row=mysqli_fetch_assoc($result3);
  //   echo "<script> alert('UPDATE SUCESSFULLY')</script>"; 
  

// select items
  // echo '<select><option>SELECT</option>';
  // $sqli="SELECT DISTINCT item_name FROM stock";
  // $result=mysqli_query($connection,$sqli);
  // while($row=mysqli_fetch_assoc($result)){
  //   echo '<option>'.$row['item_name'].'</option>';
  // }
  // echo '</select>';

//update item



?>

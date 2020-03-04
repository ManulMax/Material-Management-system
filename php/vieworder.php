<?php require_once('conect.php'); ?>
<!DOCTYPE HTML>
<html>
   <?php
      $sql = "SELECT * FROM `orders`";
      mysqli_query($connection, $sql);
      $result = mysqli_query($connection,$sql);
      
      // if($result){
      // //echo "Sucessfull";
      // }
      // else{
      // //echo"failed";	
      // }
      
      ?>
   <head>
      <link rel="stylesheet" href="../css/operators.css" type="text/css">
      <link href="../css/Hover-master/css/hover-min.css" rel="stylesheet">
      <title>PENDING ORDERS</title>
      <style>
         #ordertable {
         margin:0px 0px 0px 0px;
         font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
         border-collapse: collapse;
         width: 100%;
         }
         #ordertable td, #ordertable th {
         border: 0px;
         padding: 10px;
         text-align: center;         
         }
         #ordertable tr:nth-child(even){background-color: #f2f2f2;}
         #ordertable tr:hover {background-color: #ddd;}
         #ordertable th {
         padding-top: 12px;
         padding-bottom: 12px;
         text-align: left;
         background-color:#0d6b3f;
         color: white;
         text-align: center;
         }
      </style>
   </head>
   <body>
      <div class="wrapper">
         <div class="topbar">
            <a href="operator.php"><img src="../img/backarr.png" width="30px" height="30p" class="hvr-float shadow"></a> 
            <h1>PENDING ORDERS</h1>
         </div>
         <div class="table">
            <table id="ordertable">
            <tr>
               <th>ORDER ID</th>
               <th>Category</th>
               <th>Required Type</th>
               <th>Required Quantity</th>
               <th>Color</th>
               <th>Thickness</th>
               <th>Field Location</th>
               <th>Req Date</th>
               <th>Confirm </th>
            </tr>
            <?php
               while($row=mysqli_fetch_assoc($result)){
                   ?>
            <tr>
               <td><?php echo $row['order_id'] ?></td>
               <td><?php echo $row['category'] ?></td>
               <td><?php echo $row['types']?></td>
               <td><?php echo $row['qty']?></td>
               <td><?php echo $row['color']?></td>
               <td><?php echo $row['thickness']?></td>
               <td><?php echo $row['locations']?></td>
               <td><?php echo $row['dates']?></td>
               <?php echo "<td><a href =delete.php?order_id='".$row['order_id']."' > CONFIRM</a> </td>"?>
            </tr>
            <?php
               }
               ?>
         </div>
         <!-- send report button -->
      </div>
   </body>
</html>
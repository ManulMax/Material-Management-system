<?php require_once('conect.php'); ?>
<!DOCTYPE HTML>
<html>

    <?php
    $sql = "SELECT * FROM `messeages`";
    mysqli_query($connection, $sql);
    $result = mysqli_query($connection,$sql);
    
    if($result){
    //echo "Sucessfull";
    }
    else{
    echo"failed";	
    }

    ?>

<?php 

// if(isset($_GET['message_id'])){
//     $sqlx = "SELECT * FROM messages WHERE message_id =".$_GET['message_id'];
//     $resultx = mysqli_query($connection,$sqlx);
//     $row=mysqli_fetch_assoc($resultx);
//     if($resultx){
//        // echo "Sucessfull";
//     }
    
//     else{
//     echo"failed";	
//     }
    
//     }
  if (isset($_POST['send_reply'])){
    $sql2= "UPDATE `messeages` SET `reply`=[value-3] WHERE  message_id =".$_GET['message_id'];
    $result2=mysqli_query($connection,$sql2);

    $sql3="SELECT * FROM messages WHERE message_id=".$_POST['message_id'];
    $result3=mysqli_query($connection,$sql3);
    $row=mysqli_fetch_assoc($result3);
    echo "<script> alert(' REPLY SENT ')</script>"; 
  }

?>

    <head>
        <link rel="stylesheet" href="../css/operators.css" type="text/css">
        <title>MESSAGES</title>
        <style>
         #msgbox {
         margin:0px 0px 0px 0px;
         font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
         border-collapse: collapse;
         width: 100%;
         }
         #msgbox td, #msgbox th {
         border: 0px;
         padding: 10px;
         text-align: center;
         }
        
         #msgbox tr:hover {background-color: #ddd;}
         #msgbox th {
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
                <h1>MESSAGES</h1>
            </div>
            <form action='messages.php' method='post'>
            <div class="messagebox clearfix">
                <table id="msgbox">
                    <tr>
                        <th>MESSAGE ID</th>
                        <th>MESSAGE - ADMIN</th>
                        <th>MESSAGE - OPERATOR</th>
                        <th>SENT</th>
                        <th>DELETE</th>
            
                    </tr>
                    
                    <?php
                    while($row=mysqli_fetch_assoc($result)){
                        ?>
                    
                        <tr>
                        <td><?php echo $row['message_id'] ?></td>
                        <td><?php echo $row['message_text'] ?></td>
                        <td><?php echo "<input type='text' name='reply' value =".$row['reply'].">";?></td>
                        <?php echo "<td><a href =messages.php?message_id='".$row['message_id']."' class='hvr-pulse'> SENT </a> </td>"?>
                        <?php echo "<td><a href =delete.php?message_id='".$row['message_id']."' > DELETE MESSAGE </a> </td>"?>
                    </tr>
                    
                    <?php
                }
                ?>
            </div>
            <!-- message box -->
            </form>
            <!-- send report button -->
        </div>
    </body>
</html>


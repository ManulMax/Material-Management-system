<?php require_once('conect.php'); ?>
<?php 

if(isset($_GET['message_id'])){
    $sqlx = "SELECT * FROM messages WHERE message_id =".$_GET['message_id'];
    $resultx = mysqli_query($connection,$sqlx);
    $row=mysqli_fetch_assoc($resultx);
    if($resultx){
       // echo "Sucessfull";
    }
    
    else{
    echo"failed";	
    }
    
    }
  if (isset($_POST['send_reply'])){
    $sql2= "UPDATE messages SET reply='".$_POST['reply']."' WHERE message_id='".$_POST['message_id']."'";
    $result2=mysqli_query($connection,$sql2);

    $sql3="SELECT * FROM messages WHERE message_id=".$_POST['message_id'];
    $result3=mysqli_query($connection,$sql3);
    $row=mysqli_fetch_assoc($result3);
    echo "<script> alert(' REPLY SENT ')</script>"; 
  }

?>
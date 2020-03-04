<?php require_once('conect.php'); ?>
<?php
    if(isset($_GET['message_id'])){
    $sql = "DELETE FROM messages WHERE message_id = ".$_GET['message_id'];
    mysqli_query($connection, $sql);
    $result = mysqli_query($connection,$sql);
    if($result){
    echo "<script> alert('DELETE SUCESSFULLY') </script>";
    }
    else{

    }
header("Location: messages.php");
}

if(isset($_GET['order_id'])){
    $sql1="UPDATE `stock` SET `stock.quantity`=(stock.quantity-order.qty) FROM `stock`,`orders` WHERE stock.item_type=order.option";
    mysqli_query($connection, $sql1);
    $result = mysqli_query($connection,$sql);
    if($result){
     echo "<script> alert('decrease stock!!!') </script>";
    }
    else{
    
    }
    $sql = "DELETE FROM `orders` WHERE order_id = ".$_GET['order_id'];
    
    mysqli_query($connection, $sql);
    $result = mysqli_query($connection,$sql);
    if($result){
     echo "<script> alert('ORDER CONFIRMED !!!') </script>";
    }
    else{
    
    }
    header("Location: vieworder.php");
    }
?>
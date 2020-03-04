<?php require_once('conect.php'); ?>

<?php
session_start();
//Login
if ( isset( $_POST['login'] ) ){

    $name = $_REQUEST['name'];
    $pw = $_REQUEST['Password'];
    $option=$_POST['option'];
    // echo $name;
    // echo $pw;
    // echo $option;
    
    $result = mysqli_query($connection, 'SELECT userid FROM users WHERE uname="'.$name.'" AND passwrd="'.$pw.'" AND options="'.$option.'"');
    //echo $result;
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        echo $row["userid"];
        $_SESSION['id'] = $row["userid"];
        echo $_SESSION['id'];
        if($option=="admin"){
            header('Location: ../php/adminindex.php');
            
        }
        elseif ($option=="operator") {
            header('Location: ../php/operator.php');
        }
        elseif ($option=="customer") {
            header('Location: ../html/home.html');
        }
        
    }
    else{
        echo "<script> alert(' SOMETHING WENT WRONG ')</script>";
        header('Location: ../html/login.html');
    }
}
//Logout
if ( isset( $_POST['logout'] ) ){
    echo "Logging Out";
    session_destroy();
    unset($_SESSION['userid']);
    header("Location: ../login.html",TRUE,302);
}


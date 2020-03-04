<?php require_once('../dbc/conect.php'); ?>




<?php
	$sql = "SELECT * FROM users WHERE userid=1";
    $result2 = mysqli_query($connection,$sql);
    $result =  mysqli_query($connection,$sql);
	if($result2){
	//echo "Sucessfull";
	}
	else{
	echo"failed";	
	}
	?>

<html>
    <head>
        <link rel="stylesheet" href="../css/adminoperator.css">
        <!--<script src="../js/btn.js"> </script> -->
    <head>
    <body>
        <div class="navibar">
         
            <form>
                <a href="../html/home.html"><input type="button" value="HOME"></a><br /><br />
                <a href="adminstock.php" target="myFrame"><input type="button" value="STOCK"><br /><br /></a>
                <a href="adminsuplier.php" target="myFrame"><input type="button" value="SUPLIERS" ><br /><br /></a>
                <a href="admincustomer.php" target="myFrame"><input type="button"value="CUSTOMER"><br /><br /></a>
                <a href="admineditoperator.php" target="myFrame"><input type="button" value="EDIT OPERATOR"></a><br /><br />
                <a href="adminorder.php" target="myFrame"><input type="button" value="ORDER"><br /><br /></a>
                <input type="button" name="btnedit" value="MESSAGES" id="btnmsg" onclick=""><br /><br/>
                
            </form>
        </div>
         
        <div class="content">
            <iframe src="" name="myFrame" style="height:80%"></iframe>
            
        </div>
        <div class="profile">
            <form action="" method="POST">
			<img src="../img/avatar.png" class="avatar" />
       
                                                                <!--fetch data when loading -->
            <?php                                                               
            while($row=mysqli_fetch_assoc($result))
				{
                    ?>
                        <input type="text" name="oid" value="ID: <?php echo $row['userid'] ?>" class="lgntxtbox"/>
                        <br /><br />
                        <input id="lbl" type="text" name="fname" value="<?php echo $row['options'] ?>" class="lgntxtbox"/>
                        <br />
                        <input type="text" name="sname" class="lgntxtbox"value="NAME:<?php echo $row['uname'] ?>" />
                        <br /><br /> <br/>
                        <input type="button" name="btnedit" value="EDIT" id='btnedit' onclick="popUp();"><br /><br/>
                        <a href="../html/login.html"><input type="button" value="LOG OUT"></a>
                        </form>
                        
                       
                        
                    <?php
                }
            ?>        
        </div>
        <div class="big-modal" id='big-modal' style="display: none">
            <div class="modal-content">
              <div class="close" id="closeBtn"  onclick="closePopUp();">
                  x
              </div> 


                <div class="editMenu">
                    <form action="" method="POST" >
                        <div class="position"  >
                            
                            <select name="post"  class="slcttxtbox">
                                <option style=" background: transparent;">Customer</optionstyle=" background: transparent;>
                                <option style=" background: transparent;">Supplier</option>
                                <option style=" background: transparent;">Operator</option>
                                <option style=" background: transparent;">Admin</option>
                            </select>
                            <img src="../img/avatar.png" class="avatar" /><br />
                            <input type="submit" value="UPDATE" class="updtbttn" name="profupdate"  onClick="window.location.reload();"/>
                        </div>
                       
                        <div class="menuecontent">
                         
                        <?php                                                               
                    while($row=mysqli_fetch_assoc($result2))
				         {
                             ?>
                                <label> ADMIN ID:</label><br/>
                                <input type="text" name="userid" placeholder="Admin_ID" required class="edttxtbox" value="<?php echo $row['userid'] ?>"><br /><br/>
                                <label> FIRST NAME:</label><br/>
                                <input type="text" name="uname" placeholder="first_name" required class="edttxtbox" value="<?php echo $row['uname'] ?>"><br/><br /><br/>
                                <label>PASSWORD:</label><br/>
                                <input type="text" name="passwrd" placeholder="password" required class="edttxtbox" value=" <?php echo $row['passwrd'] ?>"><br /><br />
                                
                                <label>CONTACT INFO:</label><br/>
                                <input type="text" name="email" placeholder="Email" required class="edttxtbox"  value=" <?php echo $row['email'] ?>"><br/>
                                <input type="text" name="locations" placeholder="Location" required class="edttxtbox"  value=" <?php echo $row['locations'] ?>"><br />
                                <input type="text" name="contactNo" placeholder="Contact No" required class="edttxtbox"   value=" <?php echo $row['contactNo'] ?>"><br/><br />
                               <br/>
                            <?php
                        }
                    ?>         
                            
                        </div>
                    </form>
                <div>  
            </div>
        </div></div>
        <script>
		
		function popUp() {
			document.getElementById('big-modal').style.display = "block";
         
            
		}
		
		function closePopUp() { 
		document.getElementById('big-modal').style.display = "none";
		}
         
        </script>
        <?php
            if(isset($_POST['profupdate'])){
            
             	$sql3 = "UPDATE users SET userid = '".$_POST['userid']."',uname = '".$_POST['uname']."',passwrd = '".$_POST['passwrd']."',email  = '".$_POST['email']."',locations='".$_POST['locations']."',contactNo = '".$_POST['contactNo']."'
                  where userid = '".$_POST['userid']."' AND options='admin'";
                 $result3 = mysqli_query($connection,$sql3);
             }

        ?> 


    </body>
</html>



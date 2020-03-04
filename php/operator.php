<!DOCTYPE html>
<html>
    <head>
        <title>Operation page</title>
        <link rel="stylesheet" href="../css/operators.css" type="text/css">
        <link href="../css/Hover-master/css/hover-min.css" rel="stylesheet">
        <style>
              input[type=submit] {
              width: 30%;
              background-color:#28292b;
              font-family: calibri;
              font-size: large;
              font-weight: bold;
              color: white;
              padding: 14px 20px;
              margin: 50px 20px 10px 20px;
              border: none;
              border-radius: 4px;
              cursor: pointer;
            }
    
            input[type=button] {
              width: 30%;
              background-color:#28292b;
              font-family: calibri;
              font-size: large;
              font-weight: bold;
              color: white;
              padding: 14px 20px;
              margin: 50px 20px 10px 20px;
              border: none;
              border-radius: 4px;
              cursor: pointer;
            }
            #logout{
                float: right;
            }

        </style>
    <body>
        <div class="wrapper">
            <div class="topbar">
                <a href="../html/home.html"><img src="../img/backarr.png" width="30px" height="30p" class="hvr-float shadow"></a> 
                <a href="../html/login.html" class="logout" name="logout"><img src="../img/logout.png" width="30px" height="30p" class="hvr-float shadow"></a>
                <h1>OPERATOR</h1>
                <!-- <hr width="100%"> -->
            </div>
    
            <div class="navi clearfix">
                <div class="supplier hvr-grow shadow">
                   <a href="adminsuplier.php"><img src="../img/supplier.png" width="200" height="200"x></a>
                   <h2>SUPPLIER</h2>
                </div>
                <div class="customer hvr-grow shadow">
                    <a href="admincustomer.php" ><img src="../img/customer.png" width="200" height="200"></a>
                    <h2>CUSTOMER</h2>
                </div>
                <div class="stock  hvr-grow shadow">
                    <a href="stock.php"><img src="../img/stock.png" width="180" height="180"></a>
                    <h2>STOCK</h2>
                </div>
                <div class="order  hvr-grow shadow">
                    <a href="vieworder.php"><img src="../img/order.png" width="180" height="180"></a>
                    <h2>ORDER</h2>
                </div>
            </div>
            <div class="reportbtn">
                <form action="reportgen.php" method="post">
                    <input type="submit" value="SEND REPORT" id="send" name='print' onClick="parent.location='reportgen.php'">
                    <input type="button" value="VIEW MESSAGES" id="view" onClick="parent.location='messages.php'">
                    <input type="button" value="CONTACT ADMIN" id="contact" onClick="parent.location='../html/admindetails.html'">
                </form>
            </div>
            <!-- send report button -->
        </div>
        <!-- page wrapper -->
    </body>
</html>

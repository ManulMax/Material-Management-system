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
                        <td><select name="types" id="types">
                            <option value="">Select Type</option>
                            <option value="Frosted Glass">Frosted Glass</option>
                            <option value="Laminated Glass">Laminated Glass</option>
                            <option value="Float Glass">Float Glass</option>
                            <option value="Concrete Sand"> Concrete Sand</option>
                            <option value="Fill Sand"> Fill Sand</option>
                            <option value="Pit Sand"> Pit Sand</option>
                            <option value="Portland Cement"> Portland Cement</option>
                            <option value="Calcium Cements"> Calcium Cements</option>
                            <option value="Panda Gravel">Panda Gravel </option>
                            <option value="Fine Gravel"> Fine Gravel</option>
                            <option value="River Gravel"> River Gravel</option>
                            <option value="Steel Bars">Steel Bars </option>
                            <option value="Stainless Steel Bars"> Stainless Steel Bars</option>
                            <option value="TMT Steel Bars">TMT Steel Bars </option>
                        </select></td>
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
                        <td><select name="category" id="options">                     
                            <option value="">Select Category</option>
                            <option value="glass">Glass</option>
                            <option value="sand">Sand</option>
                            <option value="cement">Cement</option>
                            <option value="gravel">Gravel</option>
                            <option value="iron">Iron</option>
                        </select>
                        </td>
                        <td><label class="lbl">DATES </label></td>
                        <td><input type="date" name="dates" placeholder="yyy/mm/dd" class="txtbox"/></td>
                    </tr>
                </table>
                <br/><br /><br />
                
                <input type="submit" value="ADD" name="add">
                
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


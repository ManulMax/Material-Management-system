<?php require_once('../dbc/conect.php'); ?>

<!DOCTYPE html>
<html>
<?php
$sql = "SELECT * FROM stock";
mysqli_query($connection, $sql);
$result = mysqli_query($connection,$sql);

if($result){

}
else{
echo"failed";	
}
?>

<head>
	<style>
         #stockdetail {
         margin:10px 0px 0px 0px;
         font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
         border-collapse: collapse;
         width: 100%;
         }
         #stockdetail td, #stockdetail th {
         border: 1px outset;
         padding: 10px;
         text-align: center;
         }
		 #stockdetail td a{text-decoration: none;}
		 #stockdetail td a:hover{color:red;}
         #stockdetail tr:hover {background-color: #ddd;}
         #stockdetail th {
         padding-top: 12px;
         padding-bottom: 12px;
         text-align: left;
         background-color:#0d6b3f;
         color: white;
         text-align: center;
		 }

		 button[type=button] {
              width: 50%;
              background-color:#28292b;
              font-family: calibri;
              font-size: large;
              font-weight: bold;
              color: white;
              padding: 14px 20px;
              margin: 10px 20px 10px 300px;
              border: none;
              border-radius: 4px;
              cursor: pointer;
            }
      </style>	
	<title></title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<link href="../css/Hover-master/css/hover-min.css" rel="stylesheet">
	</head>
<body>
	<table id="stockdetail">
		<tr>
			<th>Item ID</th>
			<th>Item Name</th>
			<th>Item Type</th>
			<th>Quantity</th>
            <th>Unit Price</th>
			<th>Update</th>
			

		</tr>
		<?php
		while($row=mysqli_fetch_assoc($result)){
			?>
		
			<tr>
			<td><?php echo $row['item_id'] ?></td>
			<td><?php echo $row['item_name'] ?></td>
			<td><?php echo $row['item_type'] ?></td>
			<td><?php echo $row['quantity'] ?></td>
            <td><?php echo $row['unit_price']?></td>
			<?php echo "<td><a href =updatestock.php?item_id='".$row['item_id']."' class='hvr-pulse'> update </a> </td>"?>
			
		</tr>
		<?php
	}
	?>
		
	</table>
<!-- <button><a href="stock.php"><button type="button">Add</button></a> -->
<br>
<br>
<hr>
<br>
<br>
<br>
<?php 
   
if($stmt = $connection->query("SELECT item_name,quantity FROM stock")){
$php_data_array = Array();

  echo "<table>";
while ($row = $stmt->fetch_row()) {
    $php_data_array[] = $row; // Adding to array
}
  echo "</table>" ;
   }
else{
echo $connection->error;
}

// Transfor PHP array to JavaScript two dimensional array 
echo "<script>
        var my_2d = ".json_encode($php_data_array)."
</script>";

?>
<div id="chart_div"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
 <script type="text/javascript">

// Load the Visualization API and the corechart package.
google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

  // Create the data table.
  var data = new google.visualization.DataTable();
  data.addColumn('string', 'STOCK ITEM');
  data.addColumn('number', '');
  data.addColumn('number', '');
  for(i = 0; i < my_2d.length; i++)
data.addRow([my_2d[i][0], parseInt(my_2d[i][1]),parseInt(my_2d[i][2])]);
 var options = {
   
    hAxis: {title: 'Month',  titleTextStyle: {color: '#333'}},
    vAxis: {minValue: 0}
  };

  var chart = new google.charts.Bar(document.getElementById('chart_div'));
  chart.draw(data, options);
 }

</script>

</body>
</html>

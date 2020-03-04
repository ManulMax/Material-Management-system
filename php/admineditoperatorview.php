<?php require_once('../dbc/conect.php'); ?>

<!DOCTYPE html>
<html>

	<?php
	$sql = "SELECT * FROM users WHERE options='operator'";
	mysqli_query($connection, $sql);
	$result = mysqli_query($connection,$sql);

	if($result){
	//echo "Sucessfull";
	}
	else{
	echo"failed";	
	}
	?>

	<head>
		<style>
			body{
					background-color:rgba(27, 27, 26, 0.7)
				}
			table{
				border:1px;
				margin: auto;
				margin-right: auto;
				
			}
			td {
				height: 10px;
				vertical-align: bottom;
				padding: 5px 5px;
				border-bottom: 1px solid #ddd;
				font-weight:bold;
				color:white;
				font-family: 'Overpass', sans-serif;
			}
			tr:hover {
				background-color:rgba(190, 57, 4, 0.7);
			}
			tr:nth-child(even) {
				background-color:rgba(78, 24, 2, 0.7);
			}
			.header td{
				background-color:rgba(245, 73, 5, 0.7);
				color:black;
				font-family: 'Bowlby One SC', cursive;

			}
			.dbshowbtn{
				position:absolute;
				right:28%;
				top:50%;
			}
			.dbshowbtn input[type=button]
			{
				border:none;
				width:190px;
				background-color:rgb(80, 9, 9);
				color:rgb(173, 102, 20);
				font-size:16px;
				line-height:25px;
				padding:10px 60px;
				border-radius: 15px 50px 30px;
				cursor:pointer;
				margin-left:70%;
				
			}
			.dbshowbtn input[type=button]:hover
			{
				color:#fff;
				background-color:rgb(221, 108, 15);
			}
			
		</style>
	</head>
	<body>
		<div class="size">
			<table >
				<tr class="header">
					<td>Customer ID</td>
					<td>First Name</td>
					<td>Password</td>
					<td>Option</td>
					
					<td>Email</td>
					<td>Locaton</td>
					<td>Contact No</td>
					<!-- <td>EDIT</td> -->
					
				</tr>
				<?php
				while($row=mysqli_fetch_assoc($result))
				{
					?>
						<tr>
						<td><?php echo $row['userid'] ?></td>
						<td><?php echo $row['uname'] ?></td>
						<td><?php echo $row['passwrd'] ?></td>
						<td><?php echo $row['options'] ?></td>
						<td><?php echo $row['email'] ?></td>
						<td><?php echo $row['locations'] ?></td>
						<td><?php echo $row['contactNo'] ?></td>
						<!-- <?php echo "<td><a href=admincustomerupdate.php?userid='".$row['userid']."'> UPDATE </td>"?> -->
						</tr>
					<?php
				}
			?>
			</table>
		</div> 
		<div class="dbshowbtn">
				<a href="admineditoperator.php" target="_blank"><input type="button" value="SHOW DB" /></a>
		</div>
	</body>
</html>


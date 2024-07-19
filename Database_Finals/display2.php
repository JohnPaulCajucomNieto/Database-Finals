<!DOCTYPE html>
<html>
	<head>
		<title>View Product</title>
		<link rel="stylesheet" href="display2.css">
		<link href="https://fonts.googleapis.com/css2?family=Archivo:wght@800&family=Arimo&family=Barlow:wght@500&family=Bebas+Neue&family=Dancing+Script&family=Lobster&family=Montserrat:wght@100;400&family=Quicksand:wght@300&family=Roboto:wght@300&family=Tilt+Warp&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
		<style>
			html{
				display: table;
				margin: auto;
			}
			body{
				display: table-cell;
				vertical-align: middle;
				font-family: Roboto, Arial, sans-serif;
				font-size: 14px;
			}
			button{
				padding: 10px;
				margin-top: 20px;
				border-radius: 20px;
				border: none;
				border-bottom: 4px solid #3e4f24;
				background: #5a7233; 
				font-size: 16px;
				font-weight: 400;
				color: #fff;
			}
			button:hover {
     			background: #3e4f24;
      		}
			h1 {
				text-align: center;
				font-size: 30px;
			}
			table {
				width: auto;
				margin-left: auto;
				margin-right: auto;
			}
			th{
				color:white;
				background-color: #5a7233;
				font-size: 20px;
			}
			td{
				font-size: 18px;
			}
			table, th, td{
				border: 1px solid black;
				border-collapse: collapse;
				padding: 10px;
			}	
		</style>
	</head>
<body>
	<h1>Product Inventory System</h1>	

	<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "ite298_p3";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
  		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM products";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
 
	echo "<table border='1'>
	<tr>
	<th>Product Code</th> 
	<th>Product Name</th> 
	<th>Quantity</th> 
	<th>Description</th> 
	<th>Actions</th>
	</tr>";
	while($row = $result->fetch_assoc())
	{ $id = $row ["productid"];

	echo "
	<tr>
		<td>$id</td> 
		<td>".$row["productname"]."</td> 
		<td>".$row["quantity"]."</td>
		<td>".$row["description"]."</td>
		<td><a href='update.php?productid=$id'>Update</a> |
		<a href='deleteproduct.php?productid=$id'>Delete</a></td>
	</tr>";
	}
	echo "</table>";
	}else {
 	 echo "0 results";
	}
	$conn->close();
	
	?>
	<a class="addbtn" href="add.php">          
        <button class="btn1">Add Product</button>
    </a>
</body>
</html>
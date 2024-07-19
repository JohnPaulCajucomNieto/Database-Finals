<html>
<head>
	<title>Adding Row to a database</title>
</head>
<body>

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
	$productname = $_POST ["productName"];	
	$quantity = $_POST ["Quantity"];	
	$description = $_POST ["Description"];		
	

$sql = "INSERT INTO products (productname, quantity, description)
VALUES ('$productname', '$quantity', '$description')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("location:display2.php")
?>

</body>
</html>

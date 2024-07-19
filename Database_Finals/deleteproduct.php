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

 
	$id = $_GET['productid'];
	
// sql to delete a record
$sql = "DELETE FROM products WHERE productid = '$id'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header("location:display2.php");
} else {
  echo "Error deleting record: " . $conn->error;
  
}


?>
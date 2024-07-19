<html>
<head>
	<title>Update Records</title>
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
	$id = $_GET ["productid"];
	$productname = $_GET ["productName"];	
	$quantity = $_GET ["Quantity"];	
	$description = $_GET ["Description"];	

 $edit = mysqli_query($conn,"UPDATE products set productname='$productname' , quantity='$quantity'
, description='$description' where productid='$id'");
	
  if($edit)
    {
        mysqli_close($conn); // Close connection
        header("location:display2.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	

	?>	
</body>
</html>
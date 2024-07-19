<!DOCTYPE html>
<html>
  <head>
    <title>Update Product</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
      * {
      box-sizing: border-box;
      }
      html, body {
      min-height: 100vh;
      padding: 0;
      margin: 0;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px; 
      color: #666;
      }
      input, textarea { 
      outline: none;
      }
      body {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
      background: #5a7233;
      }
      h1 {
      margin-top: 0;
      font-weight: 500;
      }
      form {
      position: relative;
      width: 80%;
      border-radius: 30px;
      background: #fff;
      }
      .form-left-decoration,
      .form-right-decoration {
      content: "";
      position: absolute;
      width: 50px;
      height: 20px;
      border-radius: 20px;
      background: #5a7233;
      }
      .form-left-decoration {
      bottom: 60px;
      left: -30px;
      }
      .form-right-decoration {
      top: 60px;
      right: -30px;
      }
      .form-left-decoration:before,
      .form-left-decoration:after,
      .form-right-decoration:before,
      .form-right-decoration:after {
      content: "";
      position: absolute;
      width: 50px;
      height: 20px;
      border-radius: 30px;
      background: #fff;
      }
      .form-left-decoration:before {
      top: -20px;
      }
      .form-left-decoration:after {
      top: 20px;
      left: 10px;
      }
      .form-right-decoration:before {
      top: -20px;
      right: 0;
      }
      .form-right-decoration:after {
      top: 20px;
      right: 10px;
      }
      .circle {
      position: absolute;
      bottom: 80px;
      left: -55px;
      width: 20px;
      height: 20px;
      border-radius: 50%;
      background: #fff;
      }
      .form-inner {
      padding: 40px;
      }
      .form-inner input,
      .form-inner textarea {
      display: block;
      width: 100%;
      padding: 15px;
      margin-bottom: 10px;
      border: none;
      border-radius: 20px;
      background: #d0dfe8;
      }
      .form-inner textarea {
      resize: none;
      }
      button {
      width: 100%;
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
      @media (min-width: 568px) {
      form {
      width: 60%;
      }
      }
    </style>
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

		$id = $_GET['productid']; // get id through query string

		$qry = mysqli_query($conn,"select * from products where productid='$id'"); // select query

		$row = mysqli_fetch_array($qry);
    ?>

    <form action="editproductval.php" method="GET" class="decor">
      <div class="form-left-decoration"></div>
      <div class="form-right-decoration"></div>
      <div class="circle"></div>
      <div class="form-inner">
        <h1>Update Product</h1>
        <label>Product Name</label>
        <input id="element_1_1" name= "productid" type="hidden" class="element text" maxlength="255" size="8" value="<?php echo $row["productid"]?>"/>	
		<input id="element_1_1" name= "productName" class="element text" maxlength="255"   value="<?php echo $row["productname"]?>"/>
        <label>Quantity</label>
        <input id="element_1_1" name= "Quantity" class="element text" maxlength="255" size="8" value="<?php echo $row["quantity"]?>"/>
		<label>Description</label>
        <input id="element_1_2" name= "Description" rows="5" class="text" maxlength="255" size="8" value="<?php echo $row["description"]?>"/>
        <button type="submit" name="submit">Submit</button>
        
      </div>
    </form>
  </body>
</html>
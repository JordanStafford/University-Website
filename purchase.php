<html>


<head>
  <title>Hot Drinks And Snack Ltd</title>
  <link rel="stylesheet" href="purchase.css" />
  <link href='https://fonts.googleapis.com/css?family=Raleway' />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  </style>
</head>
<body>
  <div class="header">
    <h1>Hot Drinks And Snack Ltd</h1>
    <p>
      Providing the best drink machines on the market
    </p>
  <ul>
    <li><a class="active" href="index.html">Home</a></li>
    <li><a href="products.php">Products</a></li>
    <li><a href="admin_page.php">Admin</a></li>
  </ul>
  <h2>Select Which Product You Would Like To Purchase</h2>
  <p style="text-align:left">
    Please enter the name of the product you would like to buy
  </p>
  <?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);

require_once 'config.php';

   $sql = "SELECT * FROM machines";
   $result = $conn->query($sql);
   if ($result->num_rows > 0) {
     echo "<table><tr><th>ID</th><th>pressure</th><th>PowerOutput</th><th>WaterCapacity</th><th>price</th><th>Name</th><th>Description</th><th>Stock</th></tr>";

    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<tr><td>".$row["id"]."</td><td>".$row["pressure"]. "</td><td>".$row["powerOutput"]. "</td><td>".$row["waterCapacity"]. "</td><td>".$row["price"]."</td><td>".$row["name"]. "</td><td>".$row["description"]."</td><td>".$row["stock"]. "</td></tr>";
    }
    echo "</table>";
  } else {
      echo "0 results";
  }
  $servername = "localhost:3306";
  $username = "root";
  $password = "admin";
  $dbname = "uni";
  //creating connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  //check that there is a connection
  if ($conn->connect_error) {
    die("connection failed:" . $conn->connect_error);
  }
  //THIS IS WHERE ADDING TO THE USER DATABASE STARTS

  if($_SERVER['REQUEST_METHOD'] === 'POST'){//fetching variables

    $sql = "INSERT INTO placeOrder (userEmail, product_id, amount) VALUES (?, ?, ?)";

    if($query = $conn->prepare($sql)) { // assuming $mysqli is the connection
    $query->bind_param('sii', $_POST["email"], $_POST["product_id"], $_POST["quantity"]);
    $query->execute();
    } else {
      $error = $conn->errno . ' ' . $conn->error;
      echo "Error updating record: " . $error;
    }

    if ($query->affected_rows > 0) {
        echo "Order placed successfully";
    } else {
        echo "Error placing order: " . $conn->error;
    }
  }
  ?>







  <form style="color:black;" style="font-family:Raleway;" method="post">
    Email: <input type="text" name="email"><br />
    <select name="product_id">
      <?php
      require_once "config.php";
      $sql = "SELECT name, id FROM machines";
      $result = $conn->query($sql);

      while ($row = $result->fetch_assoc()){
        echo "<option value=" . $row['id'] . ">" . $row['name'] . "</option>";
      }
      $conn->close();
      ?>
    </select>
    Quantity: <input type="int" name="quantity"><br>
    <input type="submit"> <br />
  <br />

  <h2>Please Enter Your Card Details</h2>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="order_number.php">

        <div class="row">
          <div class="col-50">
            <h3>Billing Address & Shipping Address</h3>
            <label for="fullname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fullname" name="firstname">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" <br />
            <label for="address"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address">
            <label for="city"><i class="fa fa-building" style="font-size:24px"></i>City</label>
            <input type="text" id="city" name="city">

            <div class="row">
              <div class="col-50">
                <label for="County">County</label>
                <input type="text" id="County" name="County"> <br />
              </div>
              <div class="col-50">
                <label for="Post Code">Post Code</label>
                <input type="text" id="zip" name="zip">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Payment Types</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:green;"></i>
              <i class="fa fa-cc-stripe" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-bitcoin" style="font-size:26px;color:orange"></i>
            </div>
            <label for="nameoncard">Cardholders Name</label>
            <input type="text" id="nameoncard" name="nameoncard">
            <label for="cardnum">Card Number</label>
            <input type="text" id="cardnum" name="cardnumber">
            <label for="expiarymonth">Expiary Month</label>
            <input type="text" id="expiarymonth" name="expiarymonth">
            <div class="row">
              <div class="col-50">
                <label for="expiaryyear">Expiary Year</label>
                <input type="text" id="expiaryyear" name="expiaryyear">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv">
              </div>
            </div>
          </div>

        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <a href="order_number.php" class="btn">Continue</a>
      </form>
    </div>
  </div>
</div>



</body>

</html>

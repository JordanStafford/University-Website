<html>


<head>
  <title>Hot Drinks And Snack Ltd</title>
  <link rel="stylesheet" href="purchase.css" />
  <link href='https://fonts.googleapis.com/css?family=Raleway' />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  body {
    font-size: 16px;
  }
  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #666666;
    position: -webkit-sticky; /*safari*/
    position: sticky;
    top: 0;
  }
  li {
    float: left;
  }
  li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }
  li a:hover {
    background-color: #2E8B57;
  }
  .active {
    background-color: #2E8B57;
  }
  *{
    box-sizing: border-box;
  }
  .row {
    display: -ms-flexbox; /*IE10 */
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin: 0 -16px;
  }
  .col-25{
    -ms-flex: 25%;
    flex: 25%;
  }
  .col-50{
    -ms-flex: 50%;
    flex: 50%;
  }
  .col-75{
    -ms-flex: 75%;
    flex: 75%;
  }
  .col-25,
  .col-50,
  .col-75 {
    padding: 0 16px;
  }
  .container {
    background-color: #f2f2f2;
    padding: 5px 20px 15px 20px;
    border: 1px solid lightgrey;
    border-radius: 3px;
  }
  label {
    margin-bottom: 10px;
    display: block;
  }
  .icon-container {
    margin-bottom: 20px;
    padding: 7px 0;
    font-size: 24px;
  }
  .btn {
    background-color: #4CAF50;
    color: white;
    padding: 12px;
    margin: 10px 0;
    border: none;
    width: 100%;
    border-radius: 3px;
    cursor: pointer;
    font-size: 17px;
  }
  .btn:hover {
    background-color: #45a049;
  }
  a {
    color: #2196F3;
  }
  hr {
    border: 1px solid lightgrey;
  }
  span.price {
    float: right;
    color: grey;
  }
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



</body>

</html>

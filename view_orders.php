<html>


<head>
  <title>Hot Drinks And Snack Ltd</title>
  <link rel="stylesheet" href="view_orders.css" />
  <link href='https://fonts.googleapis.com/css?family=Raleway' />
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
  <h2>These are all the orders placed</h2>

  <?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  require_once 'config.php';

  $sql = "SELECT o.idusers, o.userEmail, o.amount, m.name AS 'product_name' FROM placeOrder o JOIN machines m ON o.product_id = m.id;";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    echo "<table><tr><th>Email</th><th>Product Name</th><th>Quantity</th></tr>";

    while($row = $result->fetch_assoc()) {
      echo "<tr><td>".$row["userEmail"]. "</td><td>".$row["product_name"]. "</td><td>".$row["amount"]. "</td></tr>";
    }
    echo "</table>";
  } else {
      echo "0 results";
  }
 $conn->close()
?>





</body>

</html>

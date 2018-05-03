<html>
<head>
  <title>Products</title>
  <link rel="stylesheet" href="products_style.css" />
  <link href='https://fonts.googleapis.com/css?family=Raleway' />
  <style>

  </style>
</head>
<body>
  <div class="header">
    <h1>Hot Drinks And Snack Ltd</h1>
    <p style="text-align:center">
      Providing the best drink machines on the market
    </p>
  <ul>
    <li><a class="active" href="index.html">Home</a></li>
    <li><a href="products.php">Products</a></li>
    <li><a href="admin_page.php">Admin</a></li>
  </ul>
  <h1 style="text-align:left">Our Products</h1>
  <p style="text-align:left;">
    We have a wide range of drinks machines avaliable to choose from
    <br /> Please browse through our selection please contact us if you have further questions
  </p>
  <?php

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
  $conn->close();

  ?>
  <h2>View our products by:</h2>
  <a href="view_by_price.php" class="button">View By Price</a>    <a href="view_by_pressure.php" class="button">View By Pressure</a> <a href="view_by_power_output.php" class="button">View By Power</a> <a href="view_by_water_capacity" class="button">View By Water Capacity</a> <br />
  <br />
  <a href="product_details.php" class="button">View Product Details</a>
  <a href="purchase.php" class="button">Make A Purchase</a>
</body>
</html>

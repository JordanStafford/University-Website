<html>


<head>
  <title>Hot Drinks And Snack Ltd</title>
  <link rel="stylesheet" href="p_eight.css" />
  <link href='https://fonts.googleapis.com/css?family=Raleway' />
  <style>
  </style>
</head>
<body>
  <div class="header">
    <h1>Hot Drinks And Snack Ltd</h1>
    <p>
      Providing the drink vending machines on the market
    </p>
  <ul>
    <li><a class="active" href="index.html">Home</a></li>
    <li><a href="products.php">Products</a></li>
    <li><a href="admin_page.php">Admin</a></li>
  </ul>
  <p style="text-align: left;">
    placeholder for the product
  </p>
  <?php
  require_once 'config.php';

   $sql = "SELECT * FROM machines LIMIT 1 OFFSET 7";
   $result = $conn->query($sql);
   if ($result->num_rows > 0) {
     echo "<table><tr><th>Name</th><th>Pressure</th><th>Power Output</th><th>Water Capacity</th><th>Price</th><th>Description</th><th>Stock</th></tr>";

    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<tr><td>".$row["name"]."</td><td>".$row["pressure"]. "</td><td>".$row["powerOutput"]. "</td><td>".$row["waterCapacity"]. "</td><td>".$row["price"]."</td><td>".$row["description"]."</td><td>".$row["stock"]. "</td></tr>";
    }
    echo "</table>";
  } else {
      echo "0 results";
  }
  $conn->close();
  ?>
  <p style="text-align: left;">
    Some place holder of description of the product
  </p>
  <img src="machine_8.jpeg" />

</body>

</html>

<html>


<head>
  <title>Hot Drinks And Snack Ltd</title>
  <link rel="stylesheet" href="p_one.css" />
  <link href='https://fonts.googleapis.com/css?family=Raleway' />
  <style>
  </style>
</head>
<body>
  <div class="header">
    <h1>Hot Drinks And Snack Ltd</h1>
    <p>
      Providing the best drinks machines on the market
    </p>
  <ul>
    <li><a class="active" href="index.html">Home</a></li>
    <li><a href="products.php">Products</a></li>
    <li><a href="admin_page.php">Admin</a></li>
  </ul>

</body>
<p style="text-align: left;">
  Machine One is our most popular system, designed for home or small office use
</p>
<?php
require_once 'config.php';

 $sql = "SELECT * FROM machines LIMIT 1";
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
  Designed specifically for small businesses and home use, with an eye catching design, and, lots of features the latest machine will provide a smooth experience.
</p>
<img src="machine_one.png" />

</html

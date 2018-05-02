<html>


<head>
  <title>Hot Drinks And Snack Ltd</title>
  <link rel="stylesheet" href="p_one.css" />
  <link href='https://fonts.googleapis.com/css?family=Raleway' />
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
<p style="text-align: left;">
  Designed specifically for small businesses and home use, with an eye catching design, and, lots of features the latest machine will provide a smooth experience.
</p>
<img src="machine_one.png" />

</html

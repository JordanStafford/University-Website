<html>
<head>
  <title>Hot Drinks And Snack Ltd</title>
  <link rel="stylesheet" href="view_by_price.css" />
  <link href='https://fonts.googleapis.com/css?family=Raleway' />
  <style>
  </style>
</head>
<body>
  <div class="header">
    <h1 style="text-align:center">Hot Drinks And Snack Ltd</h1>
    <p style="text-align:center">
      Providing the best drink machines on the market
    </p>
  <ul>
    <li><a class="active" href="index.html">Home</a></li>
    <li><a href="products.php">Products</a></li>
    <li><a href="admin_page.php">Admin</a></li>
  </ul>
  <p style="text-align:left">
    These our our products sorted by the price of each individual unit
  </p>
  <?php
  require_once 'config.php';

  $sql = "SELECT * FROM machines ORDER BY price";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    echo "<table><tr><th>Name</th><th>price</th></tr>";

   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "<tr><td>".$row["name"]."</td><td>".$row["price"]. "</td></tr>";
   }
   echo "</table>";
 } else {
     echo "0 results";
 }

  $conn->close();
  ?>
</body>
</html>

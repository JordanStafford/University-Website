<html>
<head>
  <title>Hot Drinks And Snack Ltd</title>
  <link rel="stylesheet" href="pressure.css" />
  <link href='https://fonts.googleapis.com/css?family=Raleway' />
  <style>

  </style>
</head>
<body>
  <div class="header">
    <h1>The Vending Machine Company</h1>
    <p>
      Providing the best vending machines on the market
    </p>
  <ul>
    <li><a class="active" href="index.html">Home</a></li>
    <li><a href="products.php">Products</a></li>
    <li><a href="admin_page.php">Admin</a></li>
  </ul>
  <p style="text-align:left">
    These our our products sorted by the pressure of each individual unit
  </p>
  <?php
  require_once 'config.php';

  $sql = "SELECT * FROM machines ORDER BY pressure";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    echo "<table><tr><th>Name</th><th>pressure</th></tr>";

   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "<tr><td>".$row["name"]."</td><td>".$row["pressure"]. "</td></tr>";
   }
   echo "</table>";
 } else {
     echo "0 results";
 }

  $conn->close();
  ?>
</body>
</html>

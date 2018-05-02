<html>
<head>
  <title>Hot Drinks And Snack Ltd</title>
  <link rel="stylesheet" href="power.css" />
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
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    color: white;
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
      Providing the best drink machines on the market
    </p>
  <ul>
    <li><a class="active" href="index.html">Home</a></li>
    <li><a href="products.php">Products</a></li>
    <li><a href="admin_page.php">Admin</a></li>
  </ul>
  <p style="text-align:left">
    These our our products sorted by the power output of each individual unit
  </p>
  <?php
  require_once 'config.php';

  $sql = "SELECT * FROM machines ORDER BY powerOutput";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Power Output</th></tr>";

   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "<tr><td>".$row["id"]."</td><td>".$row["powerOutput"]. "</td></tr>";
   }
   echo "</table>";
 } else {
     echo "0 results";
 }

  $conn->close();
  ?>
</body>
</html>

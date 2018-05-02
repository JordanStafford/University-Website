<html>


<head>
  <title>The Vending Company/Home</title>
  <link rel="stylesheet" href="index_page.css" />
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
    background-color: #111;
  }
  .active {
    background-color: #4CAF50;
  }
  * {
    box-sizing: border-box;
  }
  .row{
    display: flex;
  }
  .column {
    flex: 50px;
    padding: 10px;
    height: 300px;
  }
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
  <?php
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
</body>

</html

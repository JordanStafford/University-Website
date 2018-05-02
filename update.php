<html>


<head>
  <title>The Vending Company/Home</title>
  <link rel="stylesheet" href="update.css" />
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
  $ID = $_POST['id'];
  $pressure = $_POST['newpressure'];

  $query = "UPDATE machines SET pressure = '$pressure' WHERE id = '$id'";

  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["id"]."</td><td>".$row["pressure"]. "</td><td>".$row["powerOutput"]. "</td><td>".$row["waterCapacity"]. "</td><td>".$row["price"]."</td></tr>";
  }
  echo "</table>";
  else {
    echo "0 results";
}


  ?>
</body>

</html

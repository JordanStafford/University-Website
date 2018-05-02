<html>


<head>
  <title>Hot Drinks And Snack Ltd</title>
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
    background-color: #2E8B57;
  }
  .active {
    background-color: #2E8B57;
  }
  .button {
    display: inline-block;
    padding: 15px 25px;
    font-size: 24px;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    outline: #fff;
    background-color: #2E8B57;
    border: none;
    border-radius: 15px;
    box-shadow: 0 9px #999;
    color: white;
  }
  .button:hover {background-color: #3CB371}

  .button:active{
    background-color: #3e8e41;
    box-shadow: 0 5px #666;
    transform: translateY(4px);
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
  Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?>
<p style="text-align: left;">
  This is the current catalogue
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

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    updater($_POST, $id);
}

function updater($data,$id) {
    // Create connection
    $servername = "localhost:3306";
    $username = "root";
    $password = "admin";
    $dbname = "uni";
    //creating connection
    $conn = new mysqli($servername, $username, $password, $dbname);
   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   }
   $sql = "UPDATE machines SET pressure = ?, powerOutput = ?, waterCapacity = ?, price = ?, name = ?, description = ? , stock = ? WHERE id= ?";
   $update = $conn->prepare($sql);
   $update->bind_param('iiiissii', $data['pressure'], $data['powerOutput'], $data['waterCapacity'], $data['price'], $data['name'], $data['description'], $data['stock'], $id);
   $update->execute();
   if ($update->affected_rows > 0) {
       echo "Record updated successfully";
   } else {
       echo "Error updating record: " . $conn->error;
   }
}

$conn->close();
?>
<form style="color:black;" style="font-family:Raleway;" method="post">
  ID: <input type="text" name="id"><br>
  Pressure: <input type="text" name="pressure"><br>
  Power Output: <input type="text" name="powerOutput"><br>
  Water Capacity: <input type="text" name="waterCapacity"><br>
  Price: <input type="text" name="price"><br>
  Name: <input type="text" name="name"><br>
  Description: <input type="text" name="description"><br>
  Stock: <input type="text" name="stock"><br>
<input type="submit"> <br />
<br />

<a href="delete.php" class="button">Delete Items</a> <br />
<br />
<a href="add.php" class="button">Add A  New Item</a> <br />
</br>
<a href="view_orders.php" class="button">View Customers Reservations</a>

</body>

</html>

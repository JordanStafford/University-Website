<html>


<head>
  <title>Hot Drinks And Snack Ltd</title>
  <link rel="stylesheet" href="delete.css" />
  <link href='https://fonts.googleapis.com/css?family=Raleway' />
  <style>
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
</div>

<?php
require_once 'config.php';

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
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    deleter($_POST, $id);
}

function deleter($data,$id) {
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
   $sql = "DELETE FROM machines WHERE id = ?";
    $delete = $conn->prepare($sql);
    $delete->bind_param('i', $id);
    $delete->execute();
    if ($delete->affected_rows > 0) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
$conn->close();
?>
<form style="color:black;" style="font-family:Raleway;" method="post">
  ID: <input type="text" name="id"><br>
  <input type="submit"> <br />
  <br />


</body>

</html>

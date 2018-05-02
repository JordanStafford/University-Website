<html>


<head>
  <title>Hot Drinks And Snack Ltd</title>
  <link rel="stylesheet" href="customer.css" />
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
    <h1>Hot Drinks And Snack Ltd</h1>
    <p>
      Providing the best drink machines on the market
    </p>
  <ul>
    <li><a class="active" href="index.html">Home</a></li>
    <li><a href="products.php">Products</a></li>
    <li><a href="admin_page.php">Admin</a></li>
  </ul>
  <h2>These are all the orders placed</h2>

  <?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  require_once 'config.php';

  $sql = "SELECT o.idusers, o.userEmail, o.amount, m.name AS 'product_name' FROM placeOrder o JOIN machines m ON o.product_id = m.id;";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    echo "<table><tr><th>Email</th><th>Product Name</th><th>Quantity</th></tr>";

    while($row = $result->fetch_assoc()) {
      echo "<tr><td>".$row["userEmail"]. "</td><td>".$row["product_name"]. "</td><td>".$row["amount"]. "</td></tr>";
    }
    echo "</table>";
  } else {
      echo "0 results";
  }
 $conn->close()
?>





</body>

</html>

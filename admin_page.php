<?php
session_start();


if($_SERVER['REQUEST_METHOD'] === 'POST') {


require_once "config.php";

$sql = "SELECT * FROM users WHERE userName = '". $_POST['userName'] ."' AND userPassword = '". $_POST['userPassword'] ."'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
  $_SESSION["userName"]= $_POST['userName'];
  $_SESSION["userPassword"]= $_POST['userPassword'];
  header("Location: welcome_get.php");
} else {
  echo 'User Not Found Please Try Again.';
};
//   $query = $conn->prepare($sql);
//   $query->bind_param('ss', $_POST["userName"], $_POST["userPassword"]);
//
//   $result = $query->query();
//   echo $result;
//
//    if ($result == 1) {
// } else {
//    echo "Not allowed: " . $conn->error;
// }
}
?>


<html>
<head>
  <title>Hot Drinks And Snack Ltd</title>
  <link rel="stylesheet" type"text/css" href="admin_style.css" />
  <link href='https://fonts.googleapis.com/css?family=Raleway' />
  <style>
  </style>
</head>
<body>
  <div class="header">
    <h1>Hot Drinks And Snack Ltd</h1>
    <p style="text-align:center">

  <ul>
    <li><a class="active" href="index.html">Home</a></li>
    <li><a href="products.php">Products</a></li>
    <li><a href="admin_page.php">Admin</a></li>
  </ul>

  <form method = "post">
  <label>userName  :</label><input type = "text" name = "userName" class = "box"/><br /><br />
  <label>userPassword  :</label><input type = "password" name = "userPassword" class = "box" /><br/><br />
  <input type = "submit" value = " Submit "/><br />
  </form>




</body>
</html>

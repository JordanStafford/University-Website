<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {


require_once "config.php";

$sql = "SELECT * FROM users WHERE userName = '". $_POST['userName'] ."' AND userPassword = '". $_POST['userPassword'] ."'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
  header("Location: welcome_get.php");
} else {
  echo 'nay';
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

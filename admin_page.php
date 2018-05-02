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
      Providing the best drink machines on the market
    </p>

  <ul>
    <li><a class="active" href="index.html">Home</a></li>
    <li><a href="products.php">Products</a></li>
    <li><a href="admin_page.php">Admin</a></li>
  </ul>




  <h1 style="text-align:left">Welcome to the admin section. <br /> Please use your staff login details to make changes</h1>
  <form style="color:black;" style="font-family:Raleway;" action="welcome_get.php" method="get">
    UserName: <input type="text" name="userName"><br>
    Password: <input type="text" name="userPassword"><br>
<input type="submit">
  </form>
</body>
</html>

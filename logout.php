<?php
session_start();
?>
<html>
<head>
    <link rel="stylesheet" href="logout.css" />
    <link href='https://fonts.googleapis.com/css?family=Raleway' />
  <style>
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
  <?php
  session_unset();


  session_destroy();
  ?>
  <h1 style="text-align:left">You have been successfully logged out</h1>
  <a href="admin_page.php" class="button">Go Back</a> <br />
</body>
</html>

<?php
session_start();
?>
<html>
<head>
    <link rel="stylesheet" href="logout.css" />
    <link href='https://fonts.googleapis.com/css?family=Raleway' />
  <style>
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

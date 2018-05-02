<?php
   include('config.php');
   session_start();

   $user_check = $_SESSION['login_user'];

   $ses_sql = mysqli_query($db,"SELECT userName from users where userName = '$user_check' ");

   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

   $login_session = $row['userName'];

   if(!isset($_SESSION['login_user'])){
      header("location:admin_page.php");
   }
?>

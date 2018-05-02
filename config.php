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

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html><head><title>Insert Table</title></head><body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$description = $_POST["description"];
$weight = $_POST["weight"];
$cost = $_POST["cost"];
$available = $_POST["available"];
$sql = "INSERT INTO products (Product_desc, Weight, Cost, Numb)
VALUES ('$description', $weight, $cost, $available)";

if (mysqli_query($conn, $sql)) {
  echo "The Query is ". $sql;
  echo "<br>";
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
    </body></html>
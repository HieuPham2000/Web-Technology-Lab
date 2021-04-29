<!DOCTYPE html>
<html>
<head><title>Product Update Results</title></head>
<body>
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
$description = $_POST['Product'];
$sql0 = "UPDATE Products SET Numb=Numb-1 WHERE (Product_desc='$description' )";
$result = mysqli_query($conn, $sql0);
$sql = "SELECT * FROM Products";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
    echo "<font size='5' color='blue'>Update Results for Table Products <br></font>";
    echo "The Query is <i>". $sql0 ."</i>";
    echo "<br>";
    echo "<br>";
    echo "<table style='border: 1px solid black;' >";
    echo "<tr>"
            . "<td style='border: 1px solid black;'>Num</td>"
            . "<td style='border: 1px solid black;'>Product</td>"
            . "<td style='border: 1px solid black;'>Cost</td>"
            . "<td style='border: 1px solid black;'>Weight</td>"
            . "<td style='border: 1px solid black;'>Count</td>"
        . "</tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo 
                "<td style='border: 1px solid black;'>" . $row["ProductID"]. "</td>".
                "<td style='border: 1px solid black;'>" . $row["Product_desc"]. "</td>".
                "<td style='border: 1px solid black;'>" . $row["Cost"]. "</td>".
                "<td style='border: 1px solid black;'>" . $row["Weight"]. "</td>".
                "<td style='border: 1px solid black;'>" . $row["Numb"]. "</td>";
        echo "</tr>";
        
    }
  echo "</table>";
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
<!Doctype>
<html>
    <head>
        <title>Update Product</title>
    </head>
    <body>
        <font size='6' color='blue'>Select Product We Just Sold:</font>
        <form method='POST' action="sale.php">
            <label for='Hammer'>Hammer</label>
            <input type='radio' value='Hammer' name='Product'>
            <label for='Screwdriver'>Screwdriver</label>
            <input type='radio' value='Screwdriver' name='Product'>
            <label for='Wrench'>Wrench</label>
            <input type='radio' value='Wrench' name='Product'>
            <br>
            <input type="submit" value="Click to Submit">
            <input type="reset" value="Reset" >
        </form>
    </body>
</html>


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

$sql = "SELECT ProductID, Product_desc, Weight, Cost, Numb FROM products";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
    echo "The Query is ". $sql;
    echo "<br>";
    echo "<br>";
    echo "<table style='border: 1px solid black;' >";
    echo "<tr>"
            . "<td style='border: 1px solid black;'>Num</td>"
            . "<td style='border: 1px solid black;'>Product</td>"
            . "<td style='border: 1px solid black;'>Weight</td>"
            . "<td style='border: 1px solid black;'>Cost</td>"
            . "<td style='border: 1px solid black;'>Count</td>"
        . "</tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo 
                "<td style='border: 1px solid black;'>" . $row["ProductID"]. "</td>".
                "<td style='border: 1px solid black;'>" . $row["Product_desc"]. "</td>".
                "<td style='border: 1px solid black;'>" . $row["Weight"]. "</td>".
                "<td style='border: 1px solid black;'>" . $row["Cost"]. "</td>".
                "<td style='border: 1px solid black;'>" . $row["Numb"]. "</td>";
        echo "</tr>";
        
    }
  echo "</table>";
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
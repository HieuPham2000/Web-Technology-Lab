<!DOCTYPE html>
<?php
    
    if(isset($_POST["id"])){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "business_service";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }
        $id = $_POST["id"];
        $title = $_POST["title"];
        $description = $_POST["description"];

        $sql = "INSERT INTO Categories (CategoryID, Title, Description)
        VALUES ('$id','$title','$description')";

        mysqli_query($conn, $sql);

        mysqli_close($conn);
    }
    
?>

<html>
    <head>
        <title>Category Administration</title>
        <link type="text/css" rel="stylesheet" href="styles.css">
    </head>
    <body>
        <h1>Category Administration</h1>
        <br>
        <form method="POST">
            <table>
                <tr>
                    <th>CatID</th>
                    <th>Title</th>
                    <th>Description</th>
                </tr>
                    <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "business_service";

                        // Create connection
                        $conn = mysqli_connect($servername, $username, $password, $dbname);
                        // Check connection
                        if (!$conn) {
                          die("Connection failed: " . mysqli_connect_error());
                        }

                        $sql = "SELECT CategoryID, Title, Description FROM Categories";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                          // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo 
                                        "<td>" . $row["CategoryID"]. "</td>".
                                        "<td>" . $row["Title"]. "</td>".
                                        "<td>" . $row["Description"]. "</td>";
                                echo "</tr>";

                            }
                        }
                        mysqli_close($conn);
                    ?>
                
                <tr>
                    <td>
                        <input type="text" name="id" placeholder="Enter CatID" required />
                    </td>
                    <td>
                        <input type="text" name="title" placeholder="Enter Title" required />
                    </td>
                    <td>
                        <input type="text" name="description" size='60' placeholder="Enter Description" required />
                    </td>
                </tr>
            </table>
            <input type="submit" value="Add Category">
        </form>
    </body>
</html>


<!Doctype>
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
        <style>
            table {
            }
        </style>
    </head>
    <body>
        <font size="6" color="blue">Category Administration</font>
        <br>
        <form method="POST">
            <table>
                <tr>
                    <th style="background-color:cyan" >CatID</th>
                    <th style="background-color:cyan" >Title</th>
                    <th style="background-color:cyan" >Description</th>
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
                </tr>
                <tr>
                    <th>
                        <input type="text" name="id" />
                    </th>
                    <th>
                        <input type="text" name="title" />
                    </th>
                    <th>
                        <input type="text" name="description" size='60' />
                    </th>
                </tr>
            </table>
            <input type="submit" value="Add Category">
        </form>
    </body>
</html>


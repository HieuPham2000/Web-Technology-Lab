<html>
    <head>
        <title>Business Listings</title>
        <style>
            table,tr,td {
                border: 1px solid black;
            }
            
            .container{
            }
        </style>
    </head>
    <body>
        <div class='container'>
            <font size='6' color='blue'>Business Listings</font>
            <br><br>
            <div style="display: flex; flex-direction: row; ">
                <div style='padding-right: 20; display: flex; flex-direction: column; width: 200px'>
                        <table name='category[]' size='5' multiple required>
                            <tr><th>Click on a category to find business listings</th></tr>
                            <?php 
                                $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $dbname = "business_service";
                                
                                $url = "http://localhost/Web-Lab05/index.php";

                                // Create connection
                                $conn = mysqli_connect($servername, $username, $password, $dbname);
                                // Check connection
                                if (!$conn) {
                                  die("Connection failed: " . mysqli_connect_error());
                                }

                                $sql = "SELECT CategoryID,Title FROM categories";
                                $result = mysqli_query($conn, $sql);

                                if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                   
                                        
                                        while($row = mysqli_fetch_assoc($result)) {
    
                                            echo "<tr><td><a href='" . $url . '?catID='. $row['CategoryID'] . "'>" . $row['Title'] . "</a></td></tr>" ;
                                            
                                        }
                                    


                                }
                                mysqli_close($conn);
                            ?>
                        </table>
                </div>
                <table>
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
                                
                                $catID = '';
                                if(isset($_GET['catID'])){
                                    $catID = $_GET['catID'];
                                }
                                
                                $sql = "SELECT * FROM Businesses,Biz_categories
                                    where Businesses.BusinessID = Biz_categories.BusinessID and Biz_categories.CategoryID = '$catID'
                                        
                                    ";
                                $result = mysqli_query($conn, $sql);

                                if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                        
                                        echo "<table>";
                                        
                                        while($row = mysqli_fetch_assoc($result)) {
    
                                            echo "<tr>";
                                            echo "<td>" . $row["BusinessID"]. "</td>";
                                            echo "<td>" . $row["Name"]. "</td>";
                                            echo "<td>" . $row["Address"]. "</td>";
                                            echo "<td>" . $row["City"]. "</td>";
                                            echo "<td>" . $row["Telephone"]. "</td>";
                                            echo "<td>" . $row["URL"]. "</td>";
                                            echo "<td>" . $row["CategoryID"]. "</td>";
                                            echo "</tr>";
                                            
                                        }
                                        echo "</table>";


                                }
                                mysqli_close($conn);
                            ?>
                </table>
            </div>            
        </div>
    </body>
</html>
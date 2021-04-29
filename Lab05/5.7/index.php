<html>
    <head>
        <title>Business Listings</title>
        <link type="text/css" rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class='container'>
            <h1>Business Listings</h1>
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
                                
                                if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
                                    $url = "https://";   
                                else  
                                    $url = "http://";   
                                // Append the host(domain name, ip) to the URL.   
                                $url.= $_SERVER['HTTP_HOST'];   

                                // Append the requested resource location to the URL   
                                // $url.= $_SERVER['REQUEST_URI'];    
                                
                                $current_url = explode("?", $_SERVER['REQUEST_URI']);
                                // echo $current_url[0] ;
                                
                                $url.= $current_url[0];

                                // echo $url;  

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
    
                                            echo "<tr><td class='link-category'><a href='" . $url . '?catID='. $row['CategoryID'] . "'>" . $row['Title'] . "</a></td></tr>" ;
//                                            echo "<tr><td class='link' data-href=" . $url . '?catID='. $row['CategoryID'].">" . $row['Title'] . "</a></td></tr>" ;
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
<!--        <script>
            function clickLink() {
                window.location.href = this.data['href'];
            }
            
            var x = document.getElementsByClass('link');
            x.addEventListener('click', clickLink);
        </script>-->
    </body>
</html>

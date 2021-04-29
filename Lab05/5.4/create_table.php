<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "business_service";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password);
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    //Create Database
    $sql = "CREATE DATABASE $dbname";
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . $conn->error;
    }
    echo "<br>";
    
    // Connect to Database
    mysqli_select_db($conn, $dbname);
    // sql to create table
    $sql = "CREATE TABLE Businesses (
        BusinessID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        Name VARCHAR(30),
        Address VARCHAR(50),
        City VARCHAR(50),
        Telephone VARCHAR(20),
        URL VARCHAR(100)
    )";
    
    if (mysqli_query($conn, $sql)) {
      echo "Table Businesses created successfully";
    } else {
      echo "Error creating table: " . mysqli_error($conn);
    }
    echo "<br>";
    
    
    $sql = "CREATE TABLE Categories (
        CategoryID VARCHAR(30) PRIMARY KEY,
        Title VARCHAR(30),
        Description VARCHAR(50)
    )";
    
    if (mysqli_query($conn, $sql)) {
      echo "Table Categories created successfully";
    } else {
      echo "Error creating table: " . mysqli_error($conn);
    }
    echo "<br>";
    
    $sql = "CREATE TABLE Biz_Categories (
        BusinessID INT(6) UNSIGNED,
        CategoryID VARCHAR(30),
        Primary Key (BusinessID, CategoryID),
        FOREIGN KEY (BusinessID) REFERENCES Businesses(BusinessID),
        FOREIGN KEY (CategoryID) REFERENCES Categories(CategoryID)
    )";
    
    if (mysqli_query($conn, $sql)) {
      echo "Table Biz_Categories created successfully";
    } else {
      echo "Error creating table: " . mysqli_error($conn);
    }
    echo "<br>";
    
    mysqli_close($conn);
?>
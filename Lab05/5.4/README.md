#### 5.4.3.	Create tables and relationships for business listing service :zap::zap::zap:

---

Chạy file ```create_table.php``` (http://localhost:8080/Lab05/5.4/create_table.php) để tạo database ```business_service``` và các table ```Businesses```, ```Categories```, ```Biz_Categories```

Hoặc thực hiện các câu lệnh SQL sau:

```
CREATE DATABASE business_service;
```

```
CREATE TABLE Businesses (
  BusinessID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  Name VARCHAR(30),
  Address VARCHAR(50),
  City VARCHAR(50),
  Telephone VARCHAR(20),
  URL VARCHAR(100)
);
```

```
CREATE TABLE Categories (
  CategoryID VARCHAR(30) PRIMARY KEY,
  Title VARCHAR(30),
  Description VARCHAR(50)
);
```

```
CREATE TABLE Biz_Categories (
  BusinessID INT(6) UNSIGNED,
  CategoryID VARCHAR(30),
  PRIMARY KEY (BusinessID, CategoryID),
  FOREIGN KEY (BusinessID) REFERENCES Businesses(BusinessID),
  FOREIGN KEY (CategoryID) REFERENCES Categories(CategoryID)
);
```




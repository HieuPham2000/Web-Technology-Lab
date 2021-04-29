### Lab 5: MySQL & PHP :zap::zap::zap:

--- 

#### 1. Một số cài đặt/ cấu hình chung cho project :wrench::wrench::wrench:

- Đặt project trong thư mục ```htdocs``` của xampp

- Sửa file cấu hình Apache (```httpd.conf```): sửa listen port từ 80 sang 8080

<div align='center'>

![image](https://user-images.githubusercontent.com/61912505/115391857-22136080-a20a-11eb-9af3-51a109b67caa.png)
</div>

- Mở project trong Apache NetBeans IDE. Tham khảo thông tin cấu hình của project (<i>có thể tùy chỉnh lại cho phù hợp</i>)

<div align='center'>

![image](https://user-images.githubusercontent.com/61912505/116557622-cdb66200-a928-11eb-9a6e-e093fd0d776f.png)
</div>

<div align='center'>

![image](https://user-images.githubusercontent.com/61912505/116557692-e292f580-a928-11eb-8a2d-7cb024fada45.png)
</div>

- Để tạo database: truy cập http://localhost:8080/phpmyadmin/


#### 2. Lưu ý riêng cho các bài :computer::computer::computer:

##### 2.1. Với các bài 5.3 (5.3.1 đến 5.3.5)

Chú ý tạo database ```mydatabase``` trước. Có thể tạo trực tiếp bằng các thao tác trên http://localhost:8080/phpmyadmin/. Hoặc, chạy file ```index.php``` (http://localhost:8080/Lab05/index.php) để tạo database ```mydatabase``` qua code PHP.

Chạy các file tương ứng dưới đây để xem kết quả:
5.3.1 - ```table_create.php```
5.3.2 - ```insert.php```
5.3.3 - ```query.php```
5.3.4 - ```search.php```
5.3.5 - ```startsale.php```

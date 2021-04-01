### Lưu ý về môi trường chạy PHP của Lab02
---
1. Lab sử dụng VSCode, xampp.

2. Thiết lập trong file settings.json:  
``` 
"php.validate.executablePath": "C:/xampp/php/php.exe", 
```  
(<i> Tùy chỉnh lại đường dẫn cho phù hợp với vị trí folder xampp </i>)

3. Config Document Root, mặc định ban đầu nếu địa chỉ xampp là C:/xampp thì:  
```
DocumentRoot "C:/xampp/htdocs"
<Directory "C:/xampp/htdocs">
```  
Ta config lại trong mục config của Apache (file httpd.conf) bằng cách: tìm và sửa lại thành  
```
DocumentRoot "D:/20202/Web-Technology-Lab"
<Directory "D:/20202/Web-Technology-Lab">
```  
(<i> Tùy chỉnh lại đường dẫn cho phù hợp với vị trí folder Web-Technology-Lab </i>)

4. Để chạy file .php, vào xampp và start server Apache, sau đó truy cập <a href="http://localhost:8080">http://localhost:8080</a>.

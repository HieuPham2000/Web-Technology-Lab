#### 5.5.	Category Administration page :zap::zap::zap:

---

Chạy file ```admin.php``` (http://localhost:8080/Lab05/5.5/admin.php)

<i>Chú ý: Không thể thêm bản ghi mới trùng CatID</i>

Có thể thêm một số bản ghi vào bảng ```Categories``` bằng câu lệnh SQL sau:

```

INSERT INTO categories VALUES
  ('AUTO', 'Automotive Parts and Supplies', 'Accessories for your car'),
  ('FISH', 'Seafood Stores and Restaurants', 'Place to get your fish'),
  ('HEALTH', 'Health and Beauty', 'Everything for the body'),
  ('SCHOOL', 'Schools and Colleges', 'Public and Private Learning'),
  ('SPORTS', 'Community Sports and Recreation', 'Guide to Parks and Leagues');
```
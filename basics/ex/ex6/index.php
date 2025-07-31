<!-- - Viết một file PHP hiển thị danh sách 3 sản phẩm (tên, giá, mô tả) theo bảng.
- Sử dụng HTML và PHP lồng nhau, khai báo mảng sản phẩm bằng PHP, sinh bảng bằng vòng
lặp.
- Trong bảng, nếu giá sản phẩm trên 1 triệu, thì nền ô giá tiền đổi thành màu vàng (dùng
thuộc tính inline style). 

style price > 1_000_000 ? background: "yellow" : null -->

<?php
$products = [
    [100_000],
    [500_000],
    [1_500_000]
];

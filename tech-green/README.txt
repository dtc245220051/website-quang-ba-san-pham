TECH GREEN WORDPRESS THEME
==========================

Theme WordPress quảng bá sản phẩm điện tử/công nghệ, tông xanh lá - trắng.

Cài đặt trong dự án Docker hiện tại:
1. Giải nén thư mục `tech-green`.
2. Sao chép cả thư mục vào thư mục WordPress đang được mount:
   /var/www/html/wp-content/themes/tech-green
3. Mở WordPress Admin > Giao diện > Giao diện.
4. Kích hoạt "Tech Green".
5. Mở Cài đặt > Đọc. Chọn "Một trang tĩnh" và chọn trang chủ mong muốn.
   Theme có front-page.php nên trang chủ sẽ hiển thị giao diện quảng bá.

Nếu dùng Docker named volume `wordpress_data` và không bind-mount wp-content,
có thể sao chép theme vào container:
  docker cp .\tech-green wp_website:/var/www/html/wp-content/themes/tech-green

Sau đó kích hoạt theme trong WordPress Admin.
Lệnh docker cp không xóa database hay volume. Nếu tạo lại container sau này,
theme trong named volume vẫn được giữ, miễn là không xóa volume.

Thông tin liên hệ có thể chỉnh tại Giao diện > Tùy biến > Thông tin liên hệ Tech Green
(nếu WordPress/theme editor của phiên bản đang dùng hiển thị mục Tùy biến).

Lưu ý:
- Sản phẩm trong bản demo là nội dung mẫu, hãy thay bằng sản phẩm và giá thực tế.
- Email/điện thoại mặc định chỉ là dữ liệu minh họa.

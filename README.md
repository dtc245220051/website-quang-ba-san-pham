# Website quảng bá sản phẩm công nghệ

## 1. Giới thiệu

Dự án xây dựng website WordPress quảng bá các sản phẩm điện tử và công nghệ, sử dụng Docker Compose để triển khai và tích hợp hệ thống giám sát hoạt động.

## 2. Công nghệ sử dụng

- WordPress và PHP
- MySQL 8.0
- phpMyAdmin
- Nginx
- Prometheus
- Grafana
- Loki và Promtail
- Docker Compose

## 3. Chức năng

- Hiển thị và quảng bá sản phẩm công nghệ.
- Quản lý dữ liệu website bằng MySQL.
- Hỗ trợ truy cập cơ sở dữ liệu qua phpMyAdmin.
- Thu thập và giám sát các chỉ số hệ thống bằng Prometheus và Grafana.
- Thu thập, truy vấn log bằng Loki và Promtail.
- Triển khai các dịch vụ bằng Docker Compose.

## 4. Cấu trúc thư mục

- `docker-compose.yml`: cấu hình các dịch vụ.
- `tech-green/`: mã nguồn giao diện WordPress.
- `nginx/`: cấu hình Nginx.
- `prometheus/`: cấu hình Prometheus.
- `grafana/`: cấu hình datasource và dashboard.
- `loki/`: cấu hình Loki.
- `promtail/`: cấu hình Promtail.

## 5. Yêu cầu

- Docker Desktop
- Docker Compose
- Git

## 6. Cách chạy

1. Tạo tệp `.env` từ cấu hình môi trường mẫu do người quản lý dự án cung cấp.
2. Điền các biến môi trường phù hợp với cấu hình trong `docker-compose.yml`.
3. Khởi động các dịch vụ:

   ```powershell
   docker compose up -d
   ```

4. Kiểm tra trạng thái:

   ```powershell
   docker compose ps
   ```

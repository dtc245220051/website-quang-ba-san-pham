# Website quảng bá sản phẩm công nghệ

## 1. Giới thiệu

Dự án xây dựng website WordPress quảng bá các sản phẩm điện tử và công nghệ. Hệ thống sử dụng Docker Compose để triển khai các dịch vụ trong môi trường container, kết hợp giám sát tài nguyên và thu thập log tập trung nhằm hỗ trợ theo dõi hoạt động của website.

## 2. Công nghệ sử dụng

- WordPress và PHP: xây dựng website.
- MySQL 8.0: lưu trữ dữ liệu.
- phpMyAdmin: quản trị cơ sở dữ liệu.
- Nginx: reverse proxy và bổ sung các HTTP security headers.
- Prometheus: thu thập metrics.
- Grafana: trực quan hóa dữ liệu giám sát và truy vấn log.
- cAdvisor: thu thập metrics của container.
- Loki: lưu trữ và truy vấn log tập trung.
- Promtail: thu thập log và gửi đến Loki.
- Docker Compose: quản lý và triển khai các dịch vụ.
- Git và GitHub: quản lý mã nguồn.

## 3. Chức năng chính

- Hiển thị và quảng bá sản phẩm công nghệ.
- Lưu trữ dữ liệu website trong MySQL.
- Quản trị cơ sở dữ liệu bằng phpMyAdmin.
- Chuyển tiếp yêu cầu truy cập website qua Nginx.
- Thu thập và giám sát metrics bằng Prometheus và cAdvisor.
- Hiển thị dữ liệu giám sát thông qua Grafana.
- Thu thập, tập trung và truy vấn log bằng Loki, Promtail và LogQL.
- Triển khai các dịch vụ bằng Docker Compose.

## 4. Cấu trúc thư mục

- `docker-compose.yml`: định nghĩa các dịch vụ và mạng Docker.
- `.env`: chứa các biến môi trường và thông tin xác thực; không đưa lên GitHub.
- `.gitignore`: loại trừ các tệp không nên đưa vào Git.
- `tech-green/`: mã nguồn giao diện WordPress.
- `nginx/default.conf`: cấu hình Nginx.
- `prometheus/prometheus.yml`: cấu hình thu thập metrics.
- `grafana/provisioning/`: cấu hình datasource và dashboard provisioning.
- `loki/loki-config.yml`: cấu hình Loki.
- `promtail/promtail-config.yml`: cấu hình thu thập log.

## 5. Yêu cầu hệ thống

- Docker Desktop.
- Docker Compose.
- Git.
- Trình duyệt web.

## 6. Cấu hình và triển khai

### 6.1. Cấu hình môi trường

Tạo tệp `.env` tại thư mục gốc dự án dựa trên tệp mẫu do người quản lý dự án cung cấp. Điền các biến môi trường phù hợp với `docker-compose.yml`.

Không chia sẻ hoặc commit mật khẩu thật lên GitHub.

### 6.2. Khởi động hệ thống

Mở PowerShell tại thư mục dự án và chạy:

```powershell
docker compose up -d
```

### 6.3. Kiểm tra trạng thái container

```powershell
docker compose ps
```

Xem log của một dịch vụ cụ thể:

```powershell
docker compose logs --tail 50 prometheus
docker compose logs --tail 50 grafana
docker compose logs --tail 50 loki
docker compose logs --tail 50 promtail
```

## 7. Địa chỉ truy cập các dịch vụ

| Dịch vụ | Địa chỉ |
|---|---|
| Website WordPress | http://localhost:8082 |
| Nginx | http://localhost:8084 |
| phpMyAdmin | http://localhost:8083 |
| Prometheus | http://localhost:9091 |
| Grafana | http://localhost:3001 |
| cAdvisor | http://localhost:8085 |
| Loki API | http://localhost:3100 |

Đăng nhập Grafana bằng tài khoản được cấu hình trong các biến môi trường. Không lưu mật khẩu thật trong README.

## 8. Giám sát bằng Prometheus và Grafana

### 8.1. Kiểm tra Prometheus targets

Truy cập:

http://localhost:9091/targets

Kiểm tra trạng thái các target. Target có trạng thái `UP` nghĩa là Prometheus đang thu thập dữ liệu từ target đó thành công tại thời điểm kiểm tra.

### 8.2. Kiểm tra Grafana datasource

Truy cập:

http://localhost:3001

Kiểm tra datasource Prometheus và Loki trong Grafana. Có thể sử dụng Explore để truy vấn dữ liệu metrics và log.

## 9. Thu thập và truy vấn log bằng Loki, Promtail và LogQL

Promtail thu thập log từ các container Docker và gửi đến Loki. Grafana Explore được sử dụng để truy vấn log bằng LogQL.

### Query 1: Xem log WordPress

```logql
{service="wordpress"}
```

### Query 2: Tìm log có chứa từ khóa error

```logql
{container=~".+"} |= "error"
```

### Query 3: Tìm log chứa error của WordPress

```logql
{service="wordpress"} |= "error"
```

Kết quả phụ thuộc vào nhãn log và dữ liệu phát sinh trong khoảng thời gian được chọn. Nếu không có kết quả, hãy kiểm tra nhãn thực tế và khoảng thời gian truy vấn.

## 10. Bảo mật và lưu trữ dữ liệu

- Không commit tệp `.env` chứa mật khẩu.
- Chỉ mở các cổng dịch vụ cần thiết.
- Không xóa Docker volumes khi chưa sao lưu dữ liệu.
- Kiểm tra cấu hình và trạng thái container trước khi thay đổi hệ thống đang chạy.

## 11. Quản lý mã nguồn

Mã nguồn được quản lý bằng Git và lưu trữ trên GitHub.

Repository: https://github.com/dtc245220051/website-quang-ba-san-pham

Các thay đổi được ghi nhận qua các commit có nội dung mô tả cụ thể.

## 12. Kết quả triển khai

Hệ thống hướng đến các kết quả sau:

- Website WordPress chạy trong Docker.
- Dữ liệu website được lưu trong MySQL.
- Nginx tiếp nhận và chuyển tiếp yêu cầu truy cập.
- Prometheus và cAdvisor cung cấp dữ liệu giám sát theo cấu hình.
- Grafana hiển thị dữ liệu và hỗ trợ truy vấn log.
- Loki và Promtail thực hiện thu thập, tập trung và truy vấn log bằng LogQL.

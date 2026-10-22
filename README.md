# WEBSITE QUẢNG BÁ SẢN PHẨM CÔNG NGHỆ

## 1. Giới thiệu đề tài

Dự án xây dựng website WordPress phục vụ việc giới thiệu và quảng bá các sản phẩm điện tử, công nghệ. Hệ thống được triển khai bằng Docker Compose, bao gồm các dịch vụ phục vụ website, quản lý cơ sở dữ liệu, giám sát hệ thống và thu thập log tập trung.

Bên cạnh chức năng quảng bá sản phẩm, dự án tích hợp Prometheus, Grafana, cAdvisor, Loki và Promtail nhằm hỗ trợ theo dõi hoạt động của các dịch vụ và truy vấn log trong quá trình vận hành.

## 2. Mục tiêu dự án

- Xây dựng website quảng bá sản phẩm công nghệ bằng WordPress.
- Sử dụng MySQL để lưu trữ dữ liệu website.
- Sử dụng Nginx làm reverse proxy cho website.
- Triển khai các dịch vụ bằng Docker Compose.
- Thu thập và theo dõi metrics của Prometheus và cAdvisor.
- Tích hợp Grafana để trực quan hóa dữ liệu giám sát.
- Sử dụng Loki và Promtail để tập trung, truy vấn log bằng LogQL.
- Quản lý mã nguồn và lịch sử thay đổi bằng Git, GitHub.

## 3. Công nghệ sử dụng

| Công nghệ | Vai trò |
|---|---|
| WordPress | Xây dựng website |
| PHP | Nền tảng thực thi WordPress |
| MySQL 8.0 | Lưu trữ dữ liệu |
| phpMyAdmin | Quản trị cơ sở dữ liệu |
| Nginx | Reverse proxy và bổ sung HTTP security headers |
| Docker Compose | Khởi chạy và quản lý các dịch vụ |
| Prometheus | Thu thập metrics |
| cAdvisor | Thu thập metrics container |
| Grafana | Hiển thị dữ liệu giám sát và truy vấn log |
| Loki | Lưu trữ và truy vấn log tập trung |
| Promtail | Thu thập log và gửi đến Loki |
| Git, GitHub | Quản lý mã nguồn và lịch sử commit |

## 4. Kiến trúc hệ thống

Hệ thống được tổ chức thành các nhóm dịch vụ:

### 4.1. Nhóm website

- WordPress xử lý nội dung và giao diện website.
- MySQL lưu trữ dữ liệu.
- phpMyAdmin hỗ trợ quản trị cơ sở dữ liệu.
- Nginx tiếp nhận yêu cầu HTTP và chuyển tiếp đến WordPress.

### 4.2. Nhóm giám sát

- Prometheus thu thập metrics từ chính nó và cAdvisor theo cấu hình hiện tại.
- cAdvisor cung cấp thông tin hoạt động của container.
- Grafana kết nối với Prometheus để xem metrics.

### 4.3. Nhóm log tập trung

- Promtail phát hiện container Docker và thu thập log.
- Loki tiếp nhận và lưu trữ log.
- Grafana Explore cho phép truy vấn log bằng LogQL.

Các dịch vụ được quản lý bằng Docker Compose và kết nối thông qua mạng Docker được khai báo trong cấu hình dự án.

## 5. Cấu trúc thư mục

Các thành phần chính của dự án:

- `docker-compose.yml`: cấu hình các dịch vụ, mạng và volume Docker.
- `.env`: chứa các biến môi trường và thông tin xác thực.
- `.gitignore`: quy định các tệp không đưa vào Git.
- `tech-green/`: mã nguồn giao diện WordPress.
- `nginx/`: cấu hình Nginx.
- `prometheus/prometheus.yml`: cấu hình thu thập metrics.
- `grafana/provisioning/datasources/`: cấu hình datasource Grafana.
- `grafana/provisioning/dashboards/`: cấu hình dashboard provisioning.
- `loki/loki-config.yml`: cấu hình Loki.
- `promtail/promtail-config.yml`: cấu hình thu thập log của Promtail.

## 6. Yêu cầu hệ thống

- Docker Desktop.
- Docker Compose.
- Git.
- Visual Studio Code hoặc trình soạn thảo mã nguồn tương đương.
- Trình duyệt web.

## 7. Hướng dẫn triển khai

### 7.1. Chuẩn bị dự án

Mở PowerShell tại thư mục dự án:

```powershell
cd "C:\Users\PV\OneDrive\Máy tính\website-quang-ba-san-pham"
```

Đảm bảo Docker Desktop đang chạy và tệp `.env` đã được tạo với các biến môi trường phù hợp với `docker-compose.yml`.

### 7.2. Kiểm tra cấu hình Docker Compose

```powershell
docker compose config --quiet
```

Nếu lệnh hoàn tất mà không báo lỗi, cấu hình Compose đã vượt qua bước kiểm tra cú pháp và phân giải cấu hình.

### 7.3. Khởi động các dịch vụ

```powershell
docker compose up -d
```

Lệnh trên khởi chạy các dịch vụ theo cấu hình Compose. Không sử dụng lệnh xóa volume khi muốn giữ dữ liệu hiện có.

### 7.4. Kiểm tra trạng thái

```powershell
docker compose ps
```

Xem log của dịch vụ khi cần kiểm tra lỗi:

```powershell
docker compose logs --tail 50 prometheus
docker compose logs --tail 50 grafana
docker compose logs --tail 50 loki
docker compose logs --tail 50 promtail
```

## 8. Địa chỉ truy cập dịch vụ

Theo cấu hình cổng hiện tại của dự án:

| Dịch vụ | Địa chỉ |
|---|---|
| Website WordPress | [http://localhost:8082](http://localhost:8082) |
| Nginx | [http://localhost:8084](http://localhost:8084) |
| phpMyAdmin | [http://localhost:8083](http://localhost:8083) |
| Prometheus | [http://localhost:9091](http://localhost:9091) |
| Grafana | [http://localhost:3001](http://localhost:3001) |
| cAdvisor | [http://localhost:8085](http://localhost:8085) |
| Loki API | [http://localhost:3100](http://localhost:3100) |

Các địa chỉ trên dùng để truy cập từ máy tính đang chạy Docker. Cổng có thể thay đổi nếu cấu hình Compose được chỉnh sửa.

Grafana sử dụng tài khoản được khai báo trong cấu hình môi trường. Không ghi mật khẩu thực tế vào README.

## 9. Giám sát hệ thống bằng Prometheus và Grafana

### 9.1. Kiểm tra Prometheus

Truy cập:

[http://localhost:9091/targets](http://localhost:9091/targets)

Kiểm tra trạng thái các target đang được cấu hình. Trạng thái `UP` cho biết target có thể được Prometheus thu thập dữ liệu tại thời điểm kiểm tra.

Cấu hình hiện tại gồm hai target:

- `prometheus:9090`: giám sát Prometheus.
- `cadvisor:8080`: thu thập metrics từ cAdvisor.

### 9.2. Kiểm tra datasource Grafana

Truy cập:

[http://localhost:3001](http://localhost:3001)

Trong Grafana, kiểm tra datasource Prometheus và Loki. Có thể sử dụng mục Explore để kiểm tra dữ liệu metrics và log.

## 10. Thu thập log tập trung bằng Loki và Promtail

### 10.1. Quy trình hoạt động

1. Promtail phát hiện container Docker theo cấu hình.
2. Promtail thu thập log và gắn nhãn cho log.
3. Log được gửi đến Loki thông qua API.
4. Grafana kết nối với Loki để truy vấn và xem log.

### 10.2. Truy vấn LogQL

Mở Grafana, chọn **Explore**, chọn datasource **Loki** và chạy các truy vấn sau.

**Query 1: Xem log WordPress**

```logql
{service="wordpress"}
```

Mục đích: xem các log mang nhãn service WordPress.

**Query 2: Tìm log chứa từ khóa `error`**

```logql
{container=~".+"} |= "error"
```

Mục đích: lọc các log có nhãn container và nội dung chứa chuỗi `error`.

**Query 3: Tìm log lỗi của WordPress**

```logql
{service="wordpress"} |= "error"
```

Mục đích: lọc log WordPress có nội dung chứa chuỗi `error`.

Kết quả phụ thuộc vào log thực tế, nhãn được gắn và khoảng thời gian đã chọn trong Grafana. Nếu truy vấn không trả về dữ liệu, cần kiểm tra nhãn log và khoảng thời gian truy vấn.

## 11. Quản lý mã nguồn

Dự án sử dụng Git để theo dõi thay đổi và GitHub để lưu trữ mã nguồn.

Repository:

[https://github.com/dtc245220051/website-quang-ba-san-pham](https://github.com/dtc245220051/website-quang-ba-san-pham)

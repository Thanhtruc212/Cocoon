<?php
$servername = "localhost";
$username = "root"; // Tên người dùng MySQL mặc định là root
$password = ""; // Mật khẩu mặc định là rỗng
$dbname = "cocoon_db"; // Đảm bảo rằng tên cơ sở dữ liệu là 'cocoon'

// Kết nối với cơ sở dữ liệu
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
?>

<?php
session_start();
include '../backend/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = isset($_POST['role']) ? $_POST['role'] : 'user'; // Mặc định là 'user'

    // Kiểm tra nếu email đã tồn tại
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        echo "Email đã tồn tại!";
    } else {
        // Mã hóa mật khẩu nếu cần (nếu không mã hóa mật khẩu, bỏ dòng dưới)
        // $password = password_hash($password, PASSWORD_DEFAULT);

        // Thêm người dùng mới vào cơ sở dữ liệu
        $query = "INSERT INTO users (email, password, role) VALUES ('$email', '$password', '$role')";
        if ($conn->query($query) === TRUE) {
            echo "Đăng ký thành công!";
        } else {
            echo "Lỗi: " . $conn->error;
        }
    }
}
?>



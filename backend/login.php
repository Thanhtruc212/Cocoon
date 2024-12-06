<?php
session_start();
include '../backend/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($query);
    
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if ($password == $user['password']) {
            // Lưu thông tin người dùng vào session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['role'] = $user['role'];  // Lưu role vào session

            // Chuyển hướng người dùng tới trang chủ
            if ($user['role'] == 'admin') {
                header("Location: ../admin/admin_dashboard.php"); // Trang dành cho quản trị viên
            } else {
                header("Location: ../frontend/index.php"); // Trang dành cho người dùng
            }
        } else {
            echo "Sai mật khẩu";
        }
    } else {
        echo "Email không tồn tại";
    }
}
?>

<form action="login.php" method="POST">
    <label for="email">Email</label>
    <input type="email" name="email" required>
    <label for="password">Mật khẩu</label>
    <input type="password" name="password" required>
    <button type="submit">Đăng nhập</button>
</form>

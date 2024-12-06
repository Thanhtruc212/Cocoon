<?php
session_start();

// Kiểm tra nếu người dùng không phải là admin thì chuyển hướng về trang login
if ($_SESSION['role'] != 'admin') {
    header("Location: login.php");
    exit;
}
?>

<h1>Chào mừng đến với bảng điều khiển quản trị viên</h1>
<!-- Nội dung dành cho quản trị viên -->
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cocoon - Trang chủ - admin</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
        <h1>Chào mừng đến với Cocoon</h1>
        <nav>
            <ul>
                <li><a href="add_product_form.php">Sản phẩm</a></li>
            </ul>
        </nav>
    </header>
</body>


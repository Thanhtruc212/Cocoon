<?php
session_start();

// Kiểm tra nếu người dùng không phải là admin thì chuyển hướng về trang login
if ($_SESSION['role'] != 'admin') {
    header("Location: login.php");
    exit;
}
?>
<form action="../backend/add_product.php" method="POST" enctype="multipart/form-data">
    <label for="name">Tên sản phẩm:</label>
    <input type="text" name="name" required>
    <label for="description">Mô tả:</label>
    <textarea name="description" required></textarea>
    <label for="price">Giá:</label>
    <input type="number" name="price" required>
    <label for="stock">Tồn kho:</label>
    <input type="number" name="stock" required>
    <label for="image">Hình ảnh:</label>
    <input type="file" name="image" required>
    <button type="submit">Thêm sản phẩm</button>
</form>

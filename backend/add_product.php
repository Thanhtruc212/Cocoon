<!-- backend/add_product.php -->
<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];

    // Xử lý ảnh tải lên
    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $image_dir = "../uploads/" . $image;

    // Di chuyển ảnh vào thư mục uploads
    move_uploaded_file($image_tmp, $image_dir);

    // Thêm dữ liệu vào cơ sở dữ liệu
    $query = "INSERT INTO products (name, description, price, stock, image) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssdis", $name, $description, $price, $stock, $image);
    $stmt->execute();
}
?>


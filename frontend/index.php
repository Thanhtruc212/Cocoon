<?php
include '../backend/db.php';

$query = "SELECT * FROM products LIMIT 3"; // Hiển thị 3 sản phẩm nổi bật
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cocoon - Trang chủ</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
        <h1>Chào mừng đến với Cocoon</h1>
        <nav>
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="products_page.php">Sản phẩm</a></li>

                <li><a href="login_form.php">Đăng nhập</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <h2>Sản phẩm nổi bật</h2>
        <div class="products">
            <?php while ($product = $result->fetch_assoc()): ?>
                <div class="product">
                    <h3><?php echo $product['name']; ?></h3>
                    <p><?php echo $product['description']; ?></p>
                    <p><strong>Giá:</strong> <?php echo number_format($product['price'], 0, ',', '.'); ?> VND</p>
                    <p><strong>Tồn kho:</strong> <?php echo $product['stock']; ?></p>
                    <img src="../uploads/<?php echo $product['image']; ?>" alt="Hình sản phẩm">
                </div>
            <?php endwhile; ?>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Cocoon</p>
    </footer>
</body>
</html>

<!-- frontend/login_form.php -->
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cocoon - Đăng nhập</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
        <h1>Đăng nhập</h1>
        <nav>
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="login_form.php">Đăng nhập</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <h2>Vui lòng đăng nhập</h2>
        <form action="../backend/login.php" method="POST">
            <label for="email">Email</label>
            <input type="email" name="email" required>
            <label for="password">Mật khẩu</label>
            <input type="password" name="password" required>
            <button type="submit">Đăng nhập</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Cocoon</p>
    </footer>
</body>
</html>

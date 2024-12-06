<form action="register.php" method="POST">
    <label for="email">Email</label>
    <input type="email" name="email" required>
    <label for="password">Mật khẩu</label>
    <input type="password" name="password" required>
    
    <!-- Chỉ có admin mới có thể chọn role là 'admin' -->
    <?php if ($_SESSION['role'] == 'admin'): ?>
        <label for="role">Quyền</label>
        <select name="role">
            <option value="user">Người dùng</option>
            <option value="admin">Quản trị viên</option>
        </select>
    <?php endif; ?>

    <button type="submit">Đăng ký</button>
</form>
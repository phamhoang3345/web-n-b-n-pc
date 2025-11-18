<?php
session_start();
include("connect.php"); // kết nối database

$thongbao = ""; // khởi tạo thông báo

if (isset($_POST['register'])) {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Kiểm tra mật khẩu xác nhận
    if ($password !== $confirm_password) {
        $thongbao = "❌ Mật khẩu xác nhận không khớp!";
    } else {
        // Kiểm tra username/email đã tồn tại chưa
        $check = "SELECT * FROM users WHERE username='$username' OR email='$email'";
        $result = $conn->query($check);

        if ($result->num_rows > 0) {
            $thongbao = "❌ Username hoặc Email đã tồn tại!";
        } else {
            // Mã hóa mật khẩu
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Chèn user mới vào DB
            $insert = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";
            if ($conn->query($insert) === TRUE) {
                $_SESSION['username'] = $username;
                header("Location: index.php");
                exit;
            } else {
                $thongbao = "❌ Đăng ký thất bại, thử lại!";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dangki.css">
</head>
<body>

<header class="header">
    <div class="header-container">
    <!-- Logo -->
    <div class="logo">
        <h2><a href="./index.php">PCSTORE</a></h2>
    </div>

    <!-- Thanh tìm kiếm -->
    <div class="search-box">
        <input type="text" placeholder="Tìm kiếm sản phẩm..." />
        <button>Tìm</button>
    </div>

    <!-- Menu -->
    <nav class="nav-menu">
        <button class="menu-btn" id="menu-btn">☰ Danh sách sản phẩm</button>        
    </nav>

    <!-- Giỏ hàng và đăng nhập -->
    <div class="user-icons">



        <a href="#"><img src="./anh/gio hang.png">Giỏ hàng</a>


        <?php if(isset($_SESSION['username'])): ?>
        <a href="taikhoan.php"><img src="./anh/gio hang.png">Xin chào, <?php echo $_SESSION['username']; ?></a>
        <a href="dangxuat.php">Đăng xuất</a>

        <?php else: ?>
        <a href="dangnhap.php"><img src="./anh/gio hang.png">Tài khoản</a>
        <?php endif; ?>



    </div>
    </div>
</header>








<main>
    <div class="register-container">
    <h2>Đăng ký tài khoản</h2>

    <?php if (!empty($thongbao)): ?>
        <p class="error-message"><?= htmlspecialchars($thongbao) ?></p>
    <?php endif; ?>

    <form action="" method="POST">
        <div class="input-box">
            <label>Tên đăng nhập</label>
            <input type="text" name="username" required>
        </div>

        <div class="input-box">
            <label>Email</label>
            <input type="email" name="email" required>
        </div>

        <div class="input-box">
            <label>Mật khẩu</label>
            <input type="password" name="password" required>
        </div>

        <div class="input-box">
            <label>Xác nhận mật khẩu</label>
            <input type="password" name="confirm_password" required>
        </div>

        <button type="submit" class="btn-register" name="register">Đăng ký</button>
    </form>

    <div class="login-link">
        Đã có tài khoản? <a href="dangnhap.php">Đăng nhập ngay</a>
    </div>
</div>
</main>


<footer class="footer">
<div class="footer-container">
    <!-- Cột 1: Giới thiệu -->
    <div class="footer-column">
    <h3>VỀ CHÚNG TÔI</h3>
    <p>
        PC Store chuyên cung cấp PC gaming, linh kiện máy tính, laptop, phụ kiện chính hãng
        với giá tốt nhất. Cam kết hàng chất lượng – bảo hành tận tâm.
    </p>
    </div>

    <!-- Cột 2: Liên kết nhanh -->
    <div class="footer-column">
    <h3>LIÊN KẾT NHANH</h3>
    <ul>
        <li><a href="#">Trang chủ</a></li>
        <li><a href="#">PC Gaming</a></li>
        <li><a href="#">Linh kiện</a></li>
        <li><a href="#">Khuyến mãi</a></li>
        <li><a href="#">Liên hệ</a></li>
    </ul>
    </div>

    <!-- Cột 3: Hỗ trợ khách hàng -->
    <div class="footer-column">
    <h3>HỖ TRỢ KHÁCH HÀNG</h3>
    <ul>
        <li><a href="#">Chính sách bảo hành</a></li>
        <li><a href="#">Chính sách đổi trả</a></li>
        <li><a href="#">Chính sách giao hàng</a></li>
        <li><a href="#">Hướng dẫn mua hàng</a></li>
    </ul>
    </div>

    <!-- Cột 4: Liên hệ -->
    <div class="footer-column">
    <h3>LIÊN HỆ</h3>
    <p>📍 123 Trần Hưng Đạo, TP.HCM</p>
    <p>📞 0123 456 789</p>
    <p>✉️ support@pcstore.vn</p>
    <div class="social-icons">
        <a href="#"><img src="./icons/facebook.svg" alt="Facebook"></a>
        <a href="#"><img src="./icons/instagram.svg" alt="Instagram"></a>
        <a href="#"><img src="./icons/youtube.svg" alt="YouTube"></a>
    </div>
    </div>
</div>

<div class="footer-bottom">
    <p>© 2025 PC Store. All rights reserved.</p>
</div>
</footer>


</body>
</html>

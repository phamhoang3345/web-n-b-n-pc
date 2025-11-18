<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: dangnhap.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<title>Chào mừng</title>
<link rel="stylesheet" href="taikhoan.css">
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
    <div class="user-icons"></div>

<h2>Xin chào, <?php echo $_SESSION['username']; ?>!</h2>
<a href="dangxuat.php">Đăng xuất</a>
</div>
</header>


<main>
    <div class="account-container">
    <!-- Phần avatar và info ngắn -->
    <div class="profile">
        <img src="avatar.png" alt="Avatar">
        <h2>Nguyễn Văn A</h2>
        <p>user@example.com</p>
        <button>Đăng xuất</button>
    </div>

    <!-- Phần thông tin chi tiết -->
    <div class="account-info">
        <h3>Thông tin tài khoản</h3>
        <label for="name">Họ và tên</label>
        <input type="text" id="name" value="Nguyễn Văn A">
        
        <label for="email">Email</label>
        <input type="email" id="email" value="user@example.com">
        
        <label for="password">Mật khẩu</label>
        <input type="password" id="password" value="********">
        
        <button>Lưu thay đổi</button>
    </div>
        <div class="orders">
            <h3>Đơn hàng gần đây</h3>
            <table>
                <tr>
                    <th>Mã đơn</th>
                    <th>Ngày</th>
                    <th>Trạng thái</th>
                    <th>Tổng tiền</th>
                </tr>
                <tr>
                    <td>#00123</td>
                    <td>10/11/2025</td>
                    <td>Đang xử lý</td>
                    <td>15.000.000₫</td>
                </tr>
                <tr>
                    <td>#00124</td>
                    <td>12/11/2025</td>
                    <td>Hoàn thành</td>
                    <td>8.500.000₫</td>
                </tr>
            </table>
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

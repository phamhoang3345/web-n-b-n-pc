<?php
session_start();
include "connect.php";

if (!isset($_SESSION['username'])) {
    header("Location: dangnhap.php");
    exit;
}

$username = $_SESSION['username'];




// Lấy thông tin từ database
$sql = "SELECT * FROM users WHERE username = '$username'";
$result = $conn->query($sql);
$user = $result->fetch_assoc();

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
        <form action="timkiem.php" method="GET" class="search-box">
        <input type="text" name="keyword" placeholder="Tìm kiếm sản phẩm..." required>
        <button type="submit">Tìm</button>
        </form>
    </div>

    <!-- Menu -->

    <!-- Giỏ hàng và đăng nhập -->
    <div class="user-icons"></div>

<h2>Xin chào, <?php echo $_SESSION['username']; ?>!</h2>
</div>
</header>


<main>
    <div class="account-container">
    <!-- Phần avatar và info ngắn -->
    <div class="profile">
        <img src="avatar.png" alt="Avatar">
        <h2> <?php echo $_SESSION['username']; ?> </h2>
        <a href="dangxuat.php"><button>Đăng xuất</button></a>
    </div>

    <!-- Phần thông tin chi tiết -->
    <div class="account-info">
        <h3>Thông tin tài khoản</h3>
        <label for="name">Username</label>
        <input type="text" id="name" value= " <?php echo $user['username']; ?>" >
        
        <label for="email">Email</label>
        <input type="email" id="email" value="<?php echo $user['email']; ?>" >
        
        <label for="password">Mật khẩu</label>
        <input type="password" id="password" value="<?php echo $user['password']; ?>">
        
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

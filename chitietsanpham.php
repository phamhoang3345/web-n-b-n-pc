<?php session_start(); 
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
?>

<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<title>PC Gaming RGB - Thông số kỹ thuật</title>
<link rel="stylesheet" href="pc1.css">
</head>


<body>
<header class="header">
    <div class="header-container">
    <!-- Logo -->
    <div class="logo">
        <h2><a href="index.php">PCSTORE</a></h2>
    </div>

    <!-- Thanh tìm kiếm -->
    <div class="search-box">
        <input type="text" placeholder="Tìm kiếm sản phẩm..." />
        <button>Tìm</button>
    </div>

    <!-- Menu -->


    <!-- Giỏ hàng và đăng nhập -->
    <div class="user-icons">
        <a href="giohang.php"><img src="./anh/gio hang.png">Giỏ hàng</a>


        <?php if(isset($_SESSION['username'])): ?>
        <a href="taikhoan.php"><img src="./anh/gio hang.png">Xin chào, <?php echo $_SESSION['username']; ?></a>

        <?php else: ?>
        <a href="dangnhap.php"><img src="./anh/gio hang.png">Tài khoản</a>
        <?php endif; ?>


    </div>
    </div>
</header>



<main>
    <div class="product-detail">
    <div class="detail-img">
      <img id="product-img" src="" alt="Ảnh sản phẩm">
    </div>
    <div class="detail-info">
      <h2 id="product-name"></h2>
      <p class="price">
        Giá : <span id="product-price" class="amount"></span>
      </p>
      <ul id="product-specs" class="specs">
        <!-- JS sẽ chèn danh sách specs -->
      </ul>


      <div class = "btncardbuy">
      <form action="cart.php" method="POST"class="btn-form">
        <input type="hidden" name="id" value="<?php echo (int)$id; ?>" >
        <button type="submit" class="add-cart">Thêm giỏ hàng</button>
      </form>

      <button class="buy-now">Đặt hàng</button>
      </div>
      </div>
    </div>
  </div>

  <!-- Thông số kỹ thuật -->
  <div class="spec-card">
    <div class="top-border">
      <h2 class="spec-title">THÔNG SỐ KỸ THUẬT</h2>
    </div>
    <div class="table-wrap">
      <table class="spec-table" aria-label="Bảng thông số kỹ thuật">
        <thead>
          <tr>
            <th class="col-stt">STT</th>
            <th class="col-desc">Mô tả thiết bị</th>
            <th class="col-sl">SL</th>
            <th class="col-bh">BH</th>
          </tr>
        </thead>
        <tbody id="product-table-body">
          <!-- JS sẽ chèn bảng thông số -->
        </tbody>
      </table>
    </div>
  </div>

    <div class="product-section">
            <div class = "section-header">
                <h2>Sản phẩm liên quan</h2> 
            </div>
                <div class="products">
                    <div class="product">
                        <img src="/anh/WORK1.jpg" >
                        <h4>PC WORKSTATION</h4>
                        <P>ULTRA 7 265KF | RTX 4070 12GB OC</P>
                        <p class="price">37,980,000 VND</p>
                    </div>
                    <div class="product">
                        <img src="/anh/WORK2.jpg" >
                        <h4>PC WORKSTATION</h4>
                        <P>i7 14700F | RTX 4060 8GB </P>
                        <p class="price">25,980,000 VND</p>
                    </div>
                    <div class="product">
                        <img src="WORK3.JPG" >
                        <h4>PC WORKSTATION</h4>
                        <P>I9 14900KF | RTX 5070 12GB</P>
                        <p class="price">44,680,000 VND</p>
                    </div>
                    <div class="product">
                        <img src="WORK2.jpg" >
                        <h4>PC WORKSTATION</h4>
                        <p>I5 14600KF | RTX 3060 12GB</p>
                        <p class="price">20,980,000 VND</p>
                    </div>
                    <div class="product">
                        <img src="WORK3.JPG" >
                        <h4>PC WORKSTATION</h4>
                        <P>Ryzen 9 9900X | RTX 5090 32GB</P>
                        <p class="price">45,000,000 VND</p>
                    </div>
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


<script src="app.js"></script>
</body>
</html>
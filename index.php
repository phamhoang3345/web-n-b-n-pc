<?php session_start(); 
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
?>


<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cửa hàng công nghệ</title>
<link rel="stylesheet" href="main.css">
</head>
<body>




<!-- Header -->
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

    <section class="content">
        <div class="product-section">

            <div class = "section-header">
                <h2>PC GAMING</h2> 
                <a href="#" class="btn">Xem tất cả +</a>
            </div>
                <div class="products">

                    
                    <div class="product">
                        <a href="chitietsanpham.php?id=1">
                        <img src = "./anh/PCGAMINGA.png" >
                        <h4>PC GAMING</h4>
                        <P>RYZEN 9 9950X3D | RTX 5090 | 4K GAMING</P>
                        <p class="price">139.099.000 VND</p>
                        </a>
                    </div>


                    <div class="product">
                        <a href="chitietsanpham.php?id=2">
                        <img src="./anh/PCGAMINGA.png">
                        <h4>PC GAMING</h4>
                        <P>INTEL i9 14900K | RTX 4080 SUPER | 2K GAMING</P>
                        <p class="price">120,000,000 VND</p>
                        </a>
                    </div>
                    

                    <div class="product">
                        <a href="chitietsanpham.php?id=3">
                        <img src="./anh/PCGAMINGB.png" >
                        <h4>PC GAMING</h4>
                        <P>INTEL I3 12100F | RTX 3050 | 1080P GAMING</P>
                        <p class="price">12,500,000 VND</p>
                        </a>
                    </div>

                    <div class="product">
                        <a href="chitietsanpham.php?id=4">
                        <img src="./anh/PCGAMINGA1.png" >
                        <h4>PC GAMING</h4>
                        <p>RYZEN 7 7800X3D | RTX 4070TI | 1440P GAMING</p>
                        <p class="price">45,000,000 VND</p>
                        </a>
                    </div>

                    <div class="product">
                        <a href="chitietsanpham.php?id=5">
                        <img src="./anh/PCGAMINGB1.JPG" >
                        <h4>PC GAMING</h4>
                        <P>RYZEN 7 5700X | RTX 4060 | 1080P GAMING</P>
                        <p class="price">45,000,000 VND</p>
                        </a>
                    </div>

                </div>
        </div>

        <div class="product-section">
            <div class = "section-header">
                <h2>PC WORKSTATION</h2> 
                <a href="#" class="btn">Xem tất cả +</a>
            </div>
                <div class="products">
                    <div class="product">
                        <img src="./anh/WORK1.jpg" >
                        <h4>PC WORKSTATION</h4>
                        <P>ULTRA 7 265KF | RTX 4070 12GB OC</P>
                        <p class="price">37,980,000 VND</p>
                    </div>
                    <div class="product">
                        <img src="./anh/WORK2.jpg" >
                        <h4>PC WORKSTATION</h4>
                        <P>i7 14700F | RTX 4060 8GB </P>
                        <p class="price">25,980,000 VND</p>
                    </div>
                    <div class="product">
                        <img src="./anh/WORK3.jpg" >
                        <h4>PC WORKSTATION</h4>
                        <P>I9 14900KF | RTX 5070 12GB</P>
                        <p class="price">44,680,000 VND</p>
                    </div>
                    <div class="product">
                        <img src="./anh/WORK2.jpg" >
                        <h4>PC WORKSTATION</h4>
                        <p>I5 14600KF | RTX 3060 12GB</p>
                        <p class="price">20,980,000 VND</p>
                    </div>
                    <div class="product">
                        <img src="./anh/WORK3.jpg" >
                        <h4>PC WORKSTATION</h4>
                        <P>Ryzen 9 9900X | RTX 5090 32GB</P>
                        <p class="price">45,000,000 VND</p>
                    </div>
            </div>         
        </div>

        <div class="product-section">
            <div class = "section-header">
                <h2>LINH KIỆN MÁY TÍNH</h2> 
                <a href="#" class="btn">Xem tất cả +</a>
            </div>
                <div class="products">
                    <div class="product">
                        <img src="./anh/CPU1.jpg" >
                        <P>CPU Intel Core Ultra 9 285K</P>
                        <p class="price">16.190.000 VND</p>
                    </div>
                    <div class="product">
                        <img src="./anh/RTX 5080.jpg" >
                        <P>MSI GeForce RTX 5080 16G GAMING TRIO OC</P>
                        <p class="price">41.590.000</p>
                    </div>
                    <div class="product">
                        <img src="./anh/RAM1.jpg" >
                        <P>RAM Kingston Fury Beast 16GB Bus 5200MHZ DDR5</P>
                        <p class="price">2.590.000 VND</p>
                    </div>
                    <div class="product">
                        <img src="./anh/GPU2.jpg" >                      
                        <p>CARD MÀN HÌNH COLORFUL IGAME GEFORCE RTX 4070 SUPER ULTRA WHITE OC 12GB-V</p>
                        <p class="price">18.990.000 VND</p>
                    </div>
                    <div class="product">
                        <img src="./anh/CPU2.jpg" >
                        <P>CPU Intel Core Ultra 7 265KF</P>
                        <p class="price">9.890.000 VND</p>
                    </div>
                </div>
    </section>
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

<?php
session_start();

// Nếu giỏ hàng chưa có thì tạo mảng rỗng
$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];

// Tính tổng tiền
$total = 0;
if (!empty($cart)) {
    foreach ($cart as $item) {
        if (!empty($item['price'])) {
            $total += $item['price'];
        }
    }
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="giohang.css">
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
    <nav class="nav-menu">
        <button class="menu-btn" id="menu-btn">☰ Danh sách sản phẩm</button>        
    </nav>

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


<h2 style="text-align:center;">Giỏ hàng của bạn</h2>

<?php if (empty($cart)): ?>
    <p style="text-align:center;">Giỏ hàng trống!</p>
<?php else: ?>
<table>
    <tr>
        <th>Ảnh</th>
        <th>Tên sản phẩm</th>
        <th>Giá</th>
        <th>Xóa</th>
    </tr>

    <?php foreach ($cart as $index => $item): ?>
    <tr>
        <td><img src="<?php echo $item['img']; ?>"></td>
        <td><?php echo $item['name']; ?></td>
        <td><?php echo number_format($item['price']); ?> đ</td>
        <td>
            <form action="xoahang.php" method="POST">
                <input type="hidden" name="index" value="<?php echo $index; ?>">
                <button class="btn" type="submit">Xóa</button>
            </form>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<h3 style="text-align:center; margin-top:20px;">
    Tổng tiền: <?php echo number_format($total); ?> đ
</h3>

<div style="text-align:center; margin-top:20px;">
    <button class="checkout">Thanh toán</button>
</div>

<?php endif; ?>





    </main>



</body>
</html>

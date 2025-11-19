<?php
$product_name = $_POST['tensp'] ?? '';
$cart = $_SESSION['cart'] ?? [];
?>



<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt hàng</title>
    <link rel="stylesheet" href="dathang.css">
</head>
<body>

<div class="order-container">
    <h2>Thông tin đặt hàng</h2>

    <form action="xlydonhang.php" method="POST">
        <input type="hidden" name="tensp" value="<?php echo htmlspecialchars($product_name); ?>">





        <label>Họ và tên *</label>
        <input type="text" name="ten" required>

        <label>Số điện thoại *</label>
        <input type="text" name="sdt" required>

        <label>Email</label>
        <input type="email" name="email">

        <label>Địa chỉ nhận hàng *</label>
        <input type="text" name="diachi" required>

        <label>Tỉnh / Thành phố *</label>
        <select name="TP" required>
            <option value="">-- Chọn tỉnh/thành --</option>
            <option value="HCM">TP. Hồ Chí Minh</option>
            <option value="HN">Hà Nội</option>
            <option value="DN">Đà Nẵng</option>
        </select>

        <label>Ghi chú đơn hàng</label>
        <textarea name="ghichu" rows="4"></textarea>

        <h3>Phương thức thanh toán</h3>
        <div class="ptthanhtoan">
            <label><input type="radio" name="ptthanhtoan" value="cod" checked> Thanh toán khi nhận hàng (COD)</label>
            <label><input type="radio" name="ptthanhtoan" value="bank"> Chuyển khoản ngân hàng</label>
        </div>

        <button type="submit" class="btn-order">Xác nhận đặt hàng</button>
    </form>
</div>

</body>
</html>

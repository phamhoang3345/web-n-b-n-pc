<?php
// cart.php
session_start();

include "sanpham.php";

// kiểm tra id
if (!isset($_POST['id'])) {
    die("Không có ID sản phẩm.");
}

$id = intval($_POST['id']);

if (!isset($products[$id])) {
    die("Sản phẩm không tồn tại.");
}

$product = $products[$id];

// tạo giỏ nếu chưa có
if (!isset($_SESSION['cart']) || !is_array($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// thêm sản phẩm (nếu muốn tránh trùng, có thể kiểm tra trước)
$_SESSION['cart'][] = $product;

// quay về trang giỏ hàng
header("Location: giohang.php");
exit;


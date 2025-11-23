<?php
session_start();
// Lấy ID sản phẩm từ POST
$id = isset($_POST['id']) ? intval($_POST['id']) : 0;

if ($id <= 0) {
    die("ID không hợp lệ!");
}

// Lấy dữ liệu sản phẩm (từ DB hoặc mảng products của bạn)
include "sanpham.php"; // file chứa $products

if (!isset($products[$id])) {
    die("Sản phẩm không tồn tại!");
}


$product = $products[$id];

// Nếu giỏ hàng chưa tồn tại → tạo giỏ
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$found = false;

// Kiểm tra trùng
foreach ($_SESSION['cart'] as &$item) {
    if ($item['id'] == $id) {
        $item['quantity']++;
        $found = true;
        break;
    }
}

// Nếu chưa có trong giỏ → thêm mới
if (!$found) {
    $_SESSION['cart'][] = [
        'id'       => $id,
        'name'     => $product['name'],
        'price'    => $product['price'],
        'img'      => $product['img'],
        'quantity' => 1
    ];
}

// Quay lại giỏ
header("Location: giohang.php");
exit;


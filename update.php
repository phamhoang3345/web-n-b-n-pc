<?php
session_start();
include "sanpham.php";

$index = intval($_GET['index']);
$action = $_GET['action'];

if (!isset($_SESSION['cart'][$index])) {
    die("Không tìm thấy sản phẩm!");
}

if ($action == "plus") {
    $_SESSION['cart'][$index]['quantity']++;
}

if ($action == "minus") {
    $_SESSION['cart'][$index]['quantity']--;
    if ($_SESSION['cart'][$index]['quantity'] <= 0) {
        unset($_SESSION['cart'][$index]);
    }
}

header("Location: giohang.php");
exit;
?>

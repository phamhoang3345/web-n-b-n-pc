<?php
session_start();

if (isset($_POST['index'])) {
    $index = $_POST['index'];

    // Xóa sản phẩm theo index
    unset($_SESSION['cart'][$index]);

    // Sắp xếp lại index từ 0
    $_SESSION['cart'] = array_values($_SESSION['cart']);
}

header("Location: giohang.php");
exit;

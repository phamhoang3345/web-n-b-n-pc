<?php
session_start();

$index = intval($_GET['index']);

if (isset($_SESSION['cart'][$index])) {
    unset($_SESSION['cart'][$index]);
}

header("Location: giohang.php");
exit;
?>

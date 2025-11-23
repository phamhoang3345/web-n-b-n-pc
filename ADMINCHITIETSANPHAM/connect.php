<?php
$connect = new mysqli("localhost", "root", "", "web bán pc");

if ($connect->connect_error) {
    die("Kết nối thất bại: " . $connect->connect_error);
}
?>

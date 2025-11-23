<?php
include "connect.php";

if (isset($_POST['save'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, email, password) 
            VALUES ('$username', '$email', '$password')";

    if ($connect->query($sql)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Thêm người dùng thất bại: " . $connect->error;
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm người dùng</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

<div class="container">
    <h2>Thêm người dùng</h2>

    <form method="post">
        <label>username:</label>
        <input type="text" name="username" required><br>

        <label>Email:</label>
        <input type="email" name="email" required><br>

        <label>Password:</label>
        <input type="text" name="password" required><br>

        <button type="submit" name="save">Lưu</button>
        <a href="index.php">Hủy</a>
    </form>
</div>

</body>
</html>

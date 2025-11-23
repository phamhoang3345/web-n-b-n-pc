<?php
include "connect.php";

// Kiểm tra id từ URL
if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

$id = intval($_GET['id']);

// Lấy dữ liệu user
$sql = "SELECT * FROM users WHERE id = $id";
$result = $connect->query($sql);

if ($result->num_rows == 0) {
    echo "Không tìm thấy người dùng!";
    exit;
}

$data = $result->fetch_assoc();

// Xử lý cập nhật
if (isset($_POST['update'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "UPDATE users SET 
            username='$username',
            email='$email',
            password='$password'
            WHERE id=$id";

    if ($connect->query($sql)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Cập nhật thất bại: " . $connect->error;
    }
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Sửa người dùng</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

<div class="container">
    <h2>Sửa người dùng</h2>

    <form method="post">
        <label>Username:</label>
        <input type="text" name="username" value="<?= htmlspecialchars($data['username']) ?>" required><br>

        <label>Email:</label>
        <input type="email" name="email" value="<?= htmlspecialchars($data['email']) ?>" required><br>

        <label>Password:</label>
        <input type="text" name="password" value="<?= htmlspecialchars($data['password']) ?>" required><br>

        <button type="submit" name="update">Cập nhật</button>
        <a href="index.php">Hủy</a>
    </form>
</div>

</body>
</html>

<?php
// Kết nối database
include_once("connect.php");

$cn = new mysqli($servername, $username, $password, $dbname);
if ($cn->connect_error) {
    die("Lỗi kết nối database: " . $cn->connect_error);
}

// Nhận dữ liệu từ form
$fullname = $_POST["ten"] ?? "";
$phone    = $_POST["sdt"] ?? "";
$email    = $_POST["email"] ?? "";
$address  = $_POST["diachi"] ?? "";
$province = $_POST["TP"] ?? "";
$note     = $_POST["ghichu"] ?? "";
$payment  = $_POST["ptthanhtoan"] ?? "";
$product_name = $_POST["tensp"] ?? "";

// Kiểm tra dữ liệu bắt buộc
if (empty($fullname) || empty($phone) || empty($address) || empty($province)) {
    die("Thiếu thông tin bắt buộc!");
}

// Chuẩn bị câu lệnh SQL
$sql = "INSERT INTO donhang (ten, sdt, email, diachi, TP, ghichu, ptthanhtoan, thoigiandat, tensp)
        VALUES (?, ?, ?, ?, ?, ?, ?, NOW(), ?)";

$stmt = $cn->prepare($sql);
$stmt->bind_param("ssssssss", $fullname, $phone, $email, $address, $province, $note, $payment, $product_name);


if ($stmt->execute()) {
    echo "
        <div style='
            width: 400px; 
            margin: 40px auto; 
            padding: 25px; 
            background: #fff; 
            border-radius: 12px; 
            box-shadow: 0 0 10px #ccc; 
            text-align:center; 
            font-family: Arial;'>
            <h2>Đặt hàng thành công!</h2>
            <p>Cảm ơn bạn đã đặt hàng. Chúng tôi sẽ liên hệ sớm nhất.</p>
            <a href='index.php' 
                style='text-decoration:none; padding:10px 20px; border-radius:8px; background:#2081e2; color:white;'>
                Quay về trang chủ
            </a>
        </div>
    ";
} else {
    echo "Lỗi khi tạo đơn hàng: " . $stmt->error;
}

$stmt->close();
$cn->close();
?>

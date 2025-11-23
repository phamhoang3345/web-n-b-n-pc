<?php 
include "sanpham.php"; // file chứa mảng $products

$keyword = strtolower($_GET["keyword"] ?? "");

$result = array_filter($products, function($item) use ($keyword){
    return strpos(strtolower($item["name"]), $keyword) !== false;
});
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Kết quả tìm kiếm</title>

<style>
    .product {
        width: 250px;
        padding: 10px;
        margin: 10px;
        border-radius: 10px;
        border: 1px solid #ccc;
        text-align: center;
        display: inline-block;
    }
    .product img {
        width: 100%;
        height: auto;
        border-radius: 10px;
    }
</style>

</head>
<body>

<h2>Kết quả tìm kiếm: <b><?= htmlspecialchars($keyword) ?></b></h2>

<?php if (count($result) === 0): ?>
    <p>Không tìm thấy sản phẩm nào.</p>
<?php endif; ?>

<div>
<?php foreach ($result as $id => $p): ?>
    <div class="product">
        <a href="chitietsanpham.php?id=<?= $id ?>">
            <img src="<?= $p['img'] ?>">
            <h4><?= $p['name'] ?></h4>
            <p><b><?= number_format($p['price']) ?> VNĐ</b></p>
        </a>
    </div>
<?php endforeach; ?>
</div>

</body>
</html>

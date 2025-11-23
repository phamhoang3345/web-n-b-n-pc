<?php
include "connect.php";

$id = $_GET['id'];
$connect->query("DELETE FROM chitietdonhang WHERE id = $id");

header("Location: index.php");
?>

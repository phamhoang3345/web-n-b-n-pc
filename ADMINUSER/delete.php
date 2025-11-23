<?php
include "connect.php";

$id = $_GET['id'];
$connect->query("DELETE FROM users WHERE id = $id");

header("Location: index.php");
?>

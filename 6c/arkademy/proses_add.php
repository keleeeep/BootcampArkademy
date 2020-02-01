<?php
include "koneksi.php";
$cashier = $_POST['cashier'];
$category = $_POST['category'];
$product = $_POST['product'];
$price = $_POST['price'];
mysqli_query($koneksi, "INSERT INTO product (name,price,id_category,id_cashier) VALUES ('$product','$price','$category','$cashier')");
header('location:index.php');
?>
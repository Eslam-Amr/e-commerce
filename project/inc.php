<?php
session_start();
require('conAndQueryFunction.php');
// var_dump($_GET);
echo ($_GET['order_id']);
dataBaseConnection::connect();
$qun = dataBaseConnection::getData("orders", "quantity,product_id", "id=" . $_GET['order_id']);
echo "<pre>";
var_dump($qun);
$stock = dataBaseConnection::getData("products", "stock", "id=" . $qun[0]['product_id'])[0]['stock'];
var_dump($stock);
if ($stock <= $qun[0]['quantity']) {
$_SESSION['qun']='only '. $stock .' is avalible !!';
} else {

    dataBaseConnection::updateData("orders","quantity" ,++$qun[0]['quantity'], $_GET['order_id']);
}
var_dump($_SESSION['qun']);
header('location:./cart.php');
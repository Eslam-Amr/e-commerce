<?php
session_start();
require('conAndQueryFunction.php');
dataBaseConnection::connect();
$qun = dataBaseConnection::getData("orders", "quantity,product_id", "id=" . $_GET['order_id']);
$stock = dataBaseConnection::getData("products", "stock", "id=" . $qun[0]['product_id'])[0]['stock'];
if ($qun[0]['quantity'] < 2) {
    var_dump($qun[0]['product_id']);
     print_r(dataBaseConnection::deleteData("orders",  $_GET['order_id']));
} else {
    dataBaseConnection::updateData("orders","quantity",  --$qun[0]['quantity'], $_GET['order_id']);
}
header('location:./cart.php');
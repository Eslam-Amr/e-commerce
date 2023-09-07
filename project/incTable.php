<?php
session_start();
require('conAndQueryFunction.php');
echo ($_GET['table_id']);
dataBaseConnection::connect();
$stock = dataBaseConnection::getData("products", "stock", "id=" . $_GET['table_id'])[0]['stock'];
var_dump($stock);
    dataBaseConnection::updateData("products", "stock",++$stock, $_GET['table_id']);
header('location:./table.php');
<?php
session_start();
require('conAndQueryFunction.php');
echo ($_GET['table_id']);
dataBaseConnection::connect();
$stock = dataBaseConnection::getData("products", "stock", "id=" . $_GET['table_id'])[0]['stock'];
var_dump($stock);
if ($stock < 2) {
    print_r(dataBaseConnection::deleteData("products", $_GET['table_id']));
} else {
    dataBaseConnection::updateData("products", "stock", --$stock, $_GET['table_id']);
}
header('location:./table.php');
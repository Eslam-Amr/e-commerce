<?php
var_dump($_REQUEST);
require("./function.php");
require("./conAndQueryFunction.php");
session_start();
dataBaseConnection::connect();
dataBaseConnection::updateData("products", "name", $_GET['name'], $_GET['id']);
dataBaseConnection::updateData("products", "description", $_GET['description'], $_GET['id']);
dataBaseConnection::updateData("products", "price", $_GET['price'], $_GET['id']);
dataBaseConnection::updateData("products", "stock", $_GET['stock'], $_GET['id']);
header('location:./table.php');
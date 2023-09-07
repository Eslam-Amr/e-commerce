<?php
require('conAndQueryFunction.php');
dataBaseConnection::connect();
var_dump($_GET["table_id"]);
dataBaseConnection::deleteData("products",$_GET["table_id"]);
header('location:./table.php');

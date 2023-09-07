<link rel="stylesheet" href="./css/all.min.css">
<link rel="stylesheet" href="./css/bootstrap.css">
<link rel="stylesheet" href="main.css">
<?php
session_start();
require('navbar.php');
require('conAndQueryFunction.php');
dataBaseConnection::connect();
$products = dataBaseConnection::getData("products", "name,stock,description,price,id");
?>
<form action="" method="GEt">
<table class="table-bordered container mt-5">
    <thead class="p-5 text-center">
        <th class="p-3">name</th>
        <th class="p-3"> stock</th>
        <th class="p-3">description</th>
        <th class="p-3">price</th>
        <th class="p-3">delete</th>
        <th class="p-3">Update</th>
        </thead>
    <tbody>
        <?php foreach ($products as $product):
            ?>
            <th class="p-3">
                <?= $product['name'] ?>
            </th>
            <th class="card-title text-center"><span><a style="font-size: 15px; width:30px; height:30px;"
                        href="./decrTable.php?table_id=<?= $product['id'] ?>" class="  btn btn-danger">-</a>
                </span><span>
                <?= $product['stock'] ?>
                </span><span><a style="font-size: 15px; width:30px; height:30px;" href="./incTable.php?table_id=<?= $product['id'] ?>"
                        class="  btn btn-warning">+</a>
                </span></th>
            <th class="p-3">
                <?= $product['description'] ?>
            </th>
            <th class="p-3">
                <?= $product['price'] ?>
            </th>
            <th class="p-3 text-center"">
                <a href="./deleterow.php?table_id=<?= $product['id'] ?>" class="btn btn-danger text-center"> delete</a>
            </th>
            <th class="p-3 text-center"">
                <a href="./Update.php?table_id=<?= $product['id'] ?>" class="btn btn-warning text-center"> Update</a>
            </th>
            <tr>
            <?php endforeach; ?>
        </tr>

    </tbody>
</table>


</form>
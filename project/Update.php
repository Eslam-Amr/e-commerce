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
<form action="handleUpdate.php" method="GEt">

<div class="container mt-5 text-center">
    <div class="row">
        <div style="border: 3px solid black;" class="col-12 text-center">
            <div class="col-12 my-5">

                <h1>UPDATE</h1>
            </div>
            <div class="col-12 my-5">

                <h2>
                        <?php
// if (isset($_SESSION['error'])) {

//     echo $_SESSION['error'];
//     unset($_SESSION['error']);
// }
?>
                </h2>
            </div>
            <div class="col-12 my-5">

                <input type="text" name="name" class="col-8" value="<?= $products[0]['name'] ?>" placeholder="name">
            </div>
            <div class="col-12 my-5">
                <input type="number" name="price" class="col-8" placeholder="price" value="<?= $products[0]['price'] ?>">
            </div>
            <div class="col-12 my-5">

                <input type="text" name="description" class="col-8" value="<?= $products[0]['description'] ?>" placeholder="description">
            </div>
            <div class="col-12 my-5">

                <input type="number" class="col-8" value="<?= $products[0]['stock'] ?>" name="stock"  placeholder="stock">
                <input type="hidden"  name="id"  value="<?= $products[0]['id'] ?>">
            </div>
            <div class="col-12 my-5">
                <input  type="submit">
            </div>
        </div>
    </div>
</div>



</form>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<?php
session_start();
require('./function.php');
if ($_GET != null) {
    $i = $_GET['id'];
}
require('./conAndQueryFunction.php');
dataBaseConnection::connect();
require('navbar.php');
$products_id = dataBaseConnection::getData("orders", "product_id,user_id,quantity,id");
$products = dataBaseConnection::getData("products", "stock,price,name,image,description,id");
foreach ($products as $product):
    global $i;
    if (!is_null($i)):
        if ($product['id'] == $i):
            dataBaseConnection::insertData("orders", ['product_id', 'quantity', 'user_id', 'total'], [$i, 1, $_SESSION['auth']['id'], $product['id']], "product", "./cart.php");
        endif;
    endif;
endforeach;
?>
<div class="container mt-5">
    <div class="col-12">
        <?= displayError1('qun') ?>
        <div class="row">
            <?php foreach ($products as $product):                
                 foreach ($products_id as $id): 
                     if ($product['id'] == $id['product_id'] && $_SESSION['auth']['id'] == $id['user_id']):
                         global $i; ?>
                        <div class="col-3 mt-5 p-5 g-5">
                            <div class="card g-5 p-3" style="width: 18rem;">
                                <img style="width: 250px; height:250px;" src="./productImage/<?= $product["image"]; ?>"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?= $product['name'] ?>
                                    </h5>
                                    <p class="card-text">
                                        <?= $product['description'] ?>
                                    </p>
                                    <h5 class="card-title"><span><a style="font-size: 15px; width:30px; height:30px;"
                                                href="./decr.php?order_id=<?= $id['id'] ?>" class="  btn btn-danger">-</a>
                                        </span><span>
                                            <?= $id['quantity'] ?>
                                        </span><span><a style="font-size: 15px; width:30px; height:30px;"
                                                href="./inc.php?order_id=<?= $id['id'] ?>" class="  btn btn-warning">+</a>
                                        </span></h5>
                                    <h5 class="card-title">
                                        price:
                                        <?php echo $product['price'] * $id['quantity']; ?>

                                    </h5>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>
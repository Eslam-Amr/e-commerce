<?php
session_start();
require('./conAndQueryFunction.php');
if(!isset($_SESSION['auth'])){
    header('location:./index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <section class="Home">
    <?php require('./navbar.php');require('./homedisplay.php'); ?>
        </section>
    <?php if ($_SESSION['auth']['role'] == 'user'): ?>
        <?php
        dataBaseConnection::connect();
        $products = dataBaseConnection::getData("products", "stock,price,name,image,description,id");
        ?>
        <form action="" method="GET">

            <div class="container mt-5">
                <div class="col-12">
                    <div class="row">
                        
                        <?php foreach ($products as $product):?> 

                        <div class="col-3 mt-5 p-5">
                            
                            <div class="card p-3" style="width: 18rem;">
                                <img style="width: 250px; height:250px;" src="./productImage/<?=$product["image"];?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?=$product['name']?></h5>
                                    <h5 class="card-title">stock:<?=$product['stock']?></h5>
                                    <p class="card-text"><?=$product['description']?> </p>
                                    <input type="hidden" name="<?=$product['id']?>">
                                    <a href="./cart.php?id=<?=$product['id']?>" class="btn btn-primary">ORDER NOW</a>
                                </div>
                            </div>
                        </div>

                        <?php endforeach; ?>
                        
                                            </div>
                                        </div>
                                    </div>
                                    
       
                                </form>
                                    <?php endif;  ?>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/index.js"></script>
</body>

</html>
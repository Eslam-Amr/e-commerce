<?php
session_start();
require('./conAndQueryFunction.php');
if (!isset($_SESSION['auth'])) {
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
        <?php require('./navbar.php'); ?>
        <div class="contanier mt-5 p-5">
            <div class="row text-center text-info p-5">
                <div style="border: blue solid 3px;" class="col-6 mx-auto p-5 rounded-3">
                    <img class="rounded-circle mb-5" style="width:200px; height:200px;"
                        src="./registerImage/<?= $_SESSION["auth"]["image"] ?>" alt="">
                    <h2>Name:
                        <?= $_SESSION['auth']['name'] ?>
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/index.js"></script>
</body>

</html>

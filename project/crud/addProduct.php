<?php
require('../function.php');
session_start();
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<?php require('../navbar.php');?>
<div class="text-center">
    <h2 class="text-success">product menu</h2>
</div>
<div class="text-center">
    <?= displayError2('error', 'description') ?>
    <?= displayError2('error', 'name') ?>
    <?= displayError1('request_error') ?>
    <?= success('success', 'product') ?>
</div>

<div class="container w-25 border m-auto mt-2">
    <form action="../handelers/handleAdd.php" method="POST" class="form-group" enctype="multipart/form-data" >
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name">

        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">description</label>
            <textarea placeholder="enter description"  class="form-control" name="description" id="" cols="30" rows="10"></textarea>

        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">price</label>
            <input type="number" name="price" class="form-control" id="exampleFormControlTextarea1"
            placeholder="Enter price">
            
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">stock</label>
            <input type="number" name="stock" class="form-control" id="exampleFormControlTextarea1"
            placeholder="Enter stock">
            
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">insert image</label>
            <input type="file" name="product-image" class="form-control" id="exampleFormControlTextarea1"
           >
            
        </div>

        <div class="mb-3">
            <input type="submit" class="btn btn-primary" value="add">
        </div>
    </form>
</div>
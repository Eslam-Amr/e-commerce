<?php
session_start();
require_once "../function.php";
require('../conAndQueryFunction.php');
if (checkMethod("POST")) {
        $photo = $_FILES['product-image'];
        $file_ext = explode('/', $photo['type'])[1];
        $filename = time() . '.' . $file_ext;
        $x='../productImage/' . $filename;
        move_uploaded_file($photo['tmp_name'], '../productImage/' . $filename);
    $errors = [];
    foreach ($_POST as $key => $value) {
        $$key = sanitize($value);
    }
    if (!userValidation::notNull($name)) {
        $errors['name'] = "Name is required";
    } elseif (!userValidation::minLength($name, 2)) {
        $errors['name'] = "Name must be at least 3 characters";
    } elseif (!userValidation::maxLength($name, 100)) {
        $errors['name'] = "Name must be smaller than 15 characters";
    }
    if (!userValidation::notNull($description)) {
        $errors['description'] = "description is required";
    } elseif (!userValidation::minLength($description, 6)) {
        $errors['description'] = "description must be at least 7 characters";
    } elseif (!userValidation::maxLength($description, 15)) {
        $errors['description'] = "description must be smaller than 15 characters";
    }
    if (!userValidation::notNull($price)) {
        $errors['price'] = "price is required";
    }
    if (empty($errors)) {
        dataBaseConnection::connect();
        print_r(dataBaseConnection::insertData("products", [ 'name', 'description', 'price','stock', 'image'], [$name, $description, $price,$stock ,$filename], "product", "../crud/addProduct.php"));
    } else {
        $_SESSION['error'] = $errors;
        header("location:../crud/addProduct.php");
    }
} else {
    $_SESSION['request_error'] = "Invalid Method";
    header("location:../crud/addProduct.php");
}
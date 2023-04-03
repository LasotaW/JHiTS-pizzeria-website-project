<?php

require_once("includes/db_handlers.php");
require_once("includes/product_class.php");

if(isset($_POST["product-submit"])){
    $name = $_POST["product-name"];
    $img = basename($_FILES["product-img"]["name"]);
    $tmp_name = $_FILES["product-img"]["tmp_name"];
    $desc = $_POST["product-desc"];
    $priceSm = floatval($_POST["product-price-sm"]);
    $priceMd = floatval($_POST["product-price-md"]);
    $priceLg = floatval($_POST["product-price-lg"]);

    if($img){
        $folder = "img/products/";
        $dir = $folder.$img;
    
        echo $dir;
    
        move_uploaded_file($tmp_name, $dir);
    }else{
        $dir = "img/products/default_pizza.png";
    }

    $product = new Product();
    $product -> publishProduct($name, $desc, $dir, $priceSm, $priceMd, $priceLg);

    header("Location: manage_products.php");

}elseif(isset($_POST["product-update"])){
    $id = $_GET["id"];
    $name = $_POST["product-name"];
    $img = basename($_FILES["product-img"]["name"]);
    $tmp_name = $_FILES["product-img"]["tmp_name"];
    $desc = $_POST["product-desc"];
    $priceSm = floatval($_POST["product-price-sm"]);
    $priceMd = floatval($_POST["product-price-md"]);
    $priceLg = floatval($_POST["product-price-lg"]);
    
    if($img){
        $folder = "img/posts/";
        $dir = $folder.$img;
    
        echo $dir;
    
        move_uploaded_file($tmp_name, $dir);
    }else{
        $dir = "img/products/default_pizza.png";
    }

    $product = new Product();
    $product -> updateProduct($name, $desc, $dir, $priceSm, $priceMd, $priceLg, $id);
    header("Location: manage_products.php");
}

if(isset($_GET["action"]) && $_GET["action"] =="del"){
    $product = new Product();
    $product -> deleteProduct($_GET["id"]);
    header("Location: manage_products.php");
}

?>
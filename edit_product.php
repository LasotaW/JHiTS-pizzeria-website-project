<?php

    session_start();
    require_once("includes/db_handlers.php");
    include("includes/product_class.php");  
    include("includes/header.php");

    if(isset($_SESSION["userid"]) && $_SESSION["isAdmin"]){
        $products = new Product();
        $product = $products -> editProduct($_GET["id"]);

?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Nowa pizzeria w Krakowie. Orginalny smak pizzy i design lokalu. Zapraszamy do składania zamówień!">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600;700&family=Poppins:wght@200;300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="panels.css" type="text/css">
    <title>Bombowa Pizzeria Tytus</title>
    <script src="https://kit.fontawesome.com/4ece929d49.js" crossorigin="anonymous"></script>
</head>
<body>
    <main class="form-container">
        <h1>Edytuj produkt</h1>
        <form method="POST" class="admin-form" action="products_admin.php?id=<?php echo $product["id"] ?>" enctype="multipart/form-data">
            <label for="product-name">Nazwa</label>
            <input type="text" name="product-name" id="product-name" value="<?php echo $product["name"] ?>">
            <label for="product-img">Zdjęcie</label>
            <img src="<?php echo $product["img"] ?>" alt="zdjęcie posta" class="post-img">
            <input type="file" name="product-img" id="product-img" accept="image/png, image/gif, image/jpg, image/jpeg">
            <label for="product-desc">Opis</label>
            <textarea name="product-desc" id="product-desc" rows="3"><?php echo $product["ingreds"] ?></textarea>
            <h4>Ceny:</h4>
            <div class="prices">
                <label for="product-price-sm">Mała</label>
                <input type="text" name="product-price-sm" id="product-price-sm" class="price" value="<?php echo $product["price_sm"] ?>"><span>zł</span>
                <label for="product-price-md">Średnia</label>
                <input type="text" name="product-price-md" id="product-price-sm" class="price" value="<?php echo $product["price_md"] ?>"><span>zł</span>
                <label for="product-price-lg">Duża</label>
                <input type="text" name="product-price-lg" id="product-price-sm" class="price" value="<?php echo $product["price_lg"] ?>"><span>zł</span>
            </div>
            <button type="submit" name="product-update">Opublikuj</button>
        </form>
    </main>

<?php include("includes/footer.php") ?>
<?php
        }else{
            header ("Location: index.php");
            exit();
    }

    ?>
<script src="script.js"></script>
</body>




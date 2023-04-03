<?php

    session_start();
    require_once("includes/db_handlers.php");
    include("includes/product_class.php");  
    if(isset($_SESSION["userid"]) && $_SESSION["isAdmin"]){
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Nowa pizzeria w Krakowie. Orginalny smak pizzy i design lokalu. Zapraszamy do składania zamówień!">
    <link rel="icon" type="image/ico" href="img/logo.ico">
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

    <?php include ("includes/header.php")?>

    <main class="admin-products">
        <h1>Edytuj produkty</h1>
        <a href="new_product.php" class="action-btn green add-new">Dodaj nowy</a>
            <?php
            $products = new Product();

            foreach($products -> getProducts() as $product){
                echo '
                <div class="menu-elem">
                    <img src="'.$product['img'].'" alt="menu-pizza">
                    <div class="pizza-info">
                        <h3>'.$product['name'].'</h3>
                        <p class="desc">'.$product['ingreds'].'</p>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Mała</th>
                                <th>Średnia</th>
                                <th>Duża</th>
                            </tr>
                        </thead>
                        <tr>
                            <td>'.$product['price_sm'].'zł</td>
                            <td>'.$product['price_md'].'zł</td>
                            <td>'.$product['price_lg'].'zł</td>
                        </tr>
                    </table>
                    <div>
                        <a href="products_admin.php?id='.$product["id"].'&action=del" class="action-btn red">Usuń</a>
                        <a href="edit_product.php?id='.$product["id"].'" class="action-btn blue">Edytuj</a>
                    </div>
                </div>
                ';
            }
            ?>
    </main>
    <?php include("includes/footer.php"); ?>
    <?php
        }else{
            header ("Location: index.php");
            exit();
    }

    ?>
</body>
</html>
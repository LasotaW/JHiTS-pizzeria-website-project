<?php

    session_start();
    require_once("includes/db_handlers.php");
    if(isset($_SESSION["userid"]) && !$_SESSION["isAdmin"]){
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
    <link rel="stylesheet" href="panels.css">
    <title>Bombowa Pizzeria Tytus</title>
    <script src="https://kit.fontawesome.com/4ece929d49.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include("includes/header.php"); ?>

    <main class="opinion-container">
        <h1>Napisz co o nas sądzisz</h1>
        <h2>Ocena:</h2>
        <form method="POST" action="publish_opinion.php">
            <div class="radio-container">
                <input type="radio" name="rate" id="rate1" value="1" >
                <label for="rate1">1</label>
                
                <input type="radio" name="rate" id="rate2" value="2">
                <label for="rate2">2</label>
            
                <input type="radio" name="rate" id="rate3" value="3">
                <label for="rate3">3</label>
                
                <input type="radio" name="rate" id="rate4" value="4">
                <label for="rate4">4</label>
                
                <input type="radio" name="rate" id="rate5" value="5" checked>
                <label for="rate5">5</label>
            </div>

            <textarea placeholder="Twoja opinia" rows="5" cols="50" name="opinion-content"></textarea>
            <button type="submit" name="opinion-submit" class="action-btn green">Opublikuj</button>
        </form>
    </main>

    
    <?php include("includes/footer.php"); ?>
    <?php
        }else{
            header ("Location: index.php");
            exit();
    }

    ?>

<script src="script.js"></script>
</body>
</html>


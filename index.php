<?php
    session_start();
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
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Bombowa Pizzeria Tytus</title>
    <script src="https://kit.fontawesome.com/4ece929d49.js" crossorigin="anonymous"></script>
</head>
<body>

    <?php include ("includes/header.php")?>

    <header>
        <div class="content">
            <h1>Bombowa jakość pizzy</h1>
            <p>Chcesz zjeść sam lub ze znajomymi?
            <p>W lokalu czy w domu?</p> <p>Na nas zawsze możesz liczyć!</p>
            <a href="tel:+48700800359" class="btn">Zamów teraz</a>

        </div>
        <div class="info">
            <div>
                <p>Kraków ul. Pachońskiego 20B</p>
                <p>Nr tel. <a href="tel:+48700800359">700 800 359</a></p>
            </div>
        </div>
    </header>
    <main>
        <section class="about">
            <div>
                <div class="rect"></div>
                <img src="img/about-pic.jpg" alt="ciasto w rękach">
            </div>
            <div>
                <h2>O nas</h2>
                <p>
                    Pizzeria Tytus to nowo powstała restauracja w świecie pizzy Krakowa.
                    Dbamy o smak i jakość naszych dań, tak aby nasi klienci zawsze dobrze wspominali to doświadczenie.<br><br>
                    Autorska receptura, sosy własnego przepisu, dodatki topowej jakości - to właśnie sprawia, że nasza pizza jest tak wyjątkowa.<br><br>
                    Odwiedź nas w naszym lokalu przy ul. Pachońskiego 20B lub zamów już teraz telefonicznie, a my dostarczymy ją prosto do Ciebie!
                </p>
                <a href="#gallery" class="btn">Zobacz nasz lokal</a>
            </div>
        </section>
        <section class="menu" id="menu">
             <div class="content">
             <h2>Menu</h2>
             <?php include("includes/render_menu.php"); ?>
             </div>
           
        </section>

        <section class="news">  
            <h2>Aktualności</h2>
            <div class="news-arrows">
                <i class="fa-solid fa-arrow-right fa-rotate-180" id="news-larrow"></i>
                <i class="fa-solid fa-arrow-right" id="news-rarrow"></i>
            </div>
            <div class="posts-container">
                <?php include("includes/render_posts.php"); ?>
            </div>
        </section>
        <section id="gallery">
            <h2>Galeria</h2>
            <div class="slider">
                <div class="arrow left" id="arrow-left"><i class="fa-solid fa-arrow-right fa-rotate-180"></i></div>
                <img id="big-img" src="img/gallery/pexels-lawrence-suzara-1581554.jpg" alt="wnętrze restauracji 1">
                <div class="arrow right"><i class="fa-solid fa-arrow-right"></i></div>
            </div>
            <div id="thumb-imgs"></div>
        </section>
        <section class="opinions">
            <h2>Opinie</h2>
            <div class="op-wrapper">
                <?php include("includes/render_opinions.php"); ?>
            </div>
        </section>
    </main>

    <?php include("includes/footer.php"); ?>

<script src="script/news_slider.js"></script>
<script src="script/gallery_slider.js"></script>
<script src="script/opinions_slider.js"></script>

</body>
</html>
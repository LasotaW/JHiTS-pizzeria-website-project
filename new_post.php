<?php

    include("includes/header.php");

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
        <h1>Dodaj nowy post</h1>
        <form method="POST" class="admin-form" action="posts_admin.php" enctype="multipart/form-data">
            <label for="post-title">Tytuł</label>
            <input type="text" name="post-title" id="post-title">
            <label for="post-img">Zdjęcie</label>
            <input type="file" name="post-img" id="post-img" accept="image/png, image/gif, image/jpg, image/jpeg">
            <label for="post-content">Treść</label>
            <textarea name="post-content" id="post-content" rows="10"></textarea>
            <button type="submit" name="post-submit">Opublikuj</button>
        </form>
    </main>

<?php include("includes/footer.php") ?>

<script src="script.js"></script>
</body>




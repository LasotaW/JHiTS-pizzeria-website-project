<?php 
    $server = 'localhost';
    $user = 'wiktor.lasota1';
    $passwd = 'myarzBxsql';
    $dbName = 'wiktor.lasota1';


    $conn = mysqli_connect($server, $user, $passwd, $dbName);

    if (!$conn) {
        die('Nie udało się połączyć z bazą danych.<br> ' . mysql_error());
    }

    $posts = $conn -> query("SELECT * FROM posts ORDER BY date DESC");

    foreach($posts as $post){
        echo '
            <article class="post">
            <p><em>'.$post['date'].'</em></p>
            <img src="'.$post['img'].'" alt="zdjęcie posta" class="post-pic" loading="lazy">
            <h3>'.$post['title'].'</h3>
            <p>'.$post['content'].'</p>
            </article>
        ';
    }

    mysqli_close($conn);
?>
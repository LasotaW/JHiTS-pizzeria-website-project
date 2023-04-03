<?php 
    $server = 'localhost';
    $user = 'wiktor.lasota1';
    $passwd = 'myarzBxsql';
    $dbName = 'wiktor.lasota1';


    $conn = mysqli_connect($server, $user, $passwd, $dbName);

    if (!$conn) {
        die('Nie udało się połączyć z bazą danych.<br> ' . mysql_error());
    }

    $opinions = $conn -> query("SELECT opinions.rate, opinions.content, users.name  FROM opinions, users WHERE opinions.user_id = users.id;");

    foreach($opinions as $opinion){
        echo '
            <article class="opinion">
                <div class="opinion-rate"><p>'.$opinion["rate"].'/5</p></div>
                <div>
                    <h4 class="opinion-user">'.$opinion["name"].':</h4>
                    <p class="opinion-content">'.$opinion["content"].'</p>
                </div>
            </article>
        ';
    }

    mysqli_close($conn);
?>  
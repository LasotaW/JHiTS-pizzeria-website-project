<?php 
    $server = 'localhost';
    $user = 'wiktor.lasota1';
    $passwd = 'myarzBxsql';
    $dbName = 'wiktor.lasota1';

    $conn = mysqli_connect($server, $user, $passwd, $dbName);

    if (!$conn) {
        die('Nie udało się połączyć z bazą danych.<br> ' . mysql_error());
    }

    $products = $conn -> query("SELECT * FROM products");

    foreach($products as $product){
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
        </div>
        ';
    }

    mysqli_close($conn);
?>  
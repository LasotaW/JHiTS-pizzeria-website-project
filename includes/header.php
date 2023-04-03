<aside class="forms" id="forms">
    <button onclick="hide_forms()" id="close-login-btn"><i class="fa-solid fa-x"></i></button>
        <?php
            if(isset($_SESSION["userid"])){
                if($_SESSION["isAdmin"]){
        ?>
            <h3>Panel administratora</h3>
            <div class="panel-buttons">
                <a href="manage_products.php">Edytuj produkty</a>
                <a href="manage_posts.php">Edytuj posty</a>
                <a href="logout.php">Wyloguj</a>
            </div>
        <?php
                }else{?>
                    <h3>Witaj, <?php echo $_SESSION["username"]?>!</h3>
                    <div class="panel-buttons">
                        <a href="opinion.php">Dodaj opinię</a>
                        <a href="logout.php">Wyloguj</a>
                    </div>
                    
        <?php
                }
            }else{
        ?>
                <form action="login.php" method="POST" id="login-form">
                <h3>Logowanie</h3>
                <label for="login">Login</label>
                <input type="text" id="login" name="login">
                <label for="passwd">Hasło</label>
                <input type="password" id="passwd" name="passwd">
                <button type="submit" name="login-submit" class="btn">Zaloguj</button>
                <p>
                Nie masz konta? <button type="reset" onclick="show_register_form()">Zarejestruj się</button>
                </p>   
            </form>


            <form action="register.php" method="POST" id="register-form">
                <h3>Rejestracja</h3>
                <label for="reg-login">Login</label>
                <input type="text" id="reg-login" name="reg-login">

                <label for="reg-name">Imię</label>
                <input type="text" id="reg-name" name="reg-name">

                <label for="reg-email">E-mail</label>
                <input type="email" id="reg-email" name="reg-email">


                <label for="reg-passwd">Hasło</label>
                <input type="password" id="reg-passwd" name="reg-passwd">

                
                <label for="reg-repasswd">Potwórz hasło</label>
                <input type="password" id="reg-repasswd" name="reg-repasswd">

                <button type="submit" name="reg-submit" class="btn">Zarejestruj</button>
                <p>
                <button type="reset" onclick="show_forms()">Powrót do logowania</button>
                </p>   
                
            </form>
        <?php
            }
        ?>
         
    </aside>

    <nav>
        <img src="img/logo.png" alt="logo" class="nav-logo">
        <ul>
            <li class="desktop-hidden close-mobmenu-btn"><i class="fa-solid fa-x "></i></li>
            <li><a href="index.php">Strona główna</a></li>
            <li><a href="playground.php">Plac zabaw</a></li>
            <li><a href="index.php#menu">Menu</a></li>
            <li><a href="index.php#gallery">Lokal</a></li>
            <li><button onclick="show_forms()" id="login-btn">Moje konto</button></li>
        </ul>
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </nav>

    
<script src="script/script.js"></script>
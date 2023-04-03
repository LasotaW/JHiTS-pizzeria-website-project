<?php 

if(isset($_POST["reg-submit"])){
    $login = $_POST["reg-login"];
    $name = $_POST["reg-name"];
    $email = $_POST["reg-email"];
    $passwd = $_POST["reg-passwd"];
    $repasswd = $_POST["reg-repasswd"];

    require_once("db_handlers.php");
    require_once("register_queries.php");
    require_once("register_handlers.php");

   
    $register = new RegisterHandlers($login, $name, $email, $passwd, $repasswd);
    $register -> registerUser();

    header("location: index.php?error=none");

}

?>
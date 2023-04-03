<?php 
   if(isset($_POST["login-submit"])){
      $login = $_POST["login"];
      $passwd = $_POST["passwd"];

      require_once("includes/db_handlers.php");
      require_once("includes/login_queries.php");
      require_once("includes/login_handlers.php");
      

      $login = new LoginHandlers($login, $passwd);
      $login -> loginUser();
      
      header("location: index.php?error=none");
   }
?>

<?php

session_start();

require_once("includes/db_handlers.php");
require_once("includes/opinion_class.php");

if(isset($_POST["opinion-submit"])){
    $rate = $_POST["rate"];
    $content = $_POST["opinion-content"];
    $userId = $_SESSION["userid"];

    $op = new Opinion();
    $op -> publishOpinion($rate, $content, $userId);
}

?>
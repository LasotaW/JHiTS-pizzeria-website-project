<?php

require_once("includes/db_handlers.php");
require_once("includes/posts_classes.php");

if(isset($_POST["post-submit"])){
    $title = $_POST["post-title"];
    $img = basename($_FILES["post-img"]["name"]);
    $tmp_name = $_FILES["post-img"]["tmp_name"];
    $content = $_POST["post-content"];

    if($img){
        $folder = "img/posts/";
        $dir = $folder.$img;
    
        echo $dir;
    
        move_uploaded_file($tmp_name, $dir);
    }else{
        $dir = "img/posts/default_post.png";
    }

    if(!$title){
        $title = "Bez tytułu";
    }

    $post = new Post();
    $post -> publishPost($title, $dir, $content);

    header("Location: manage_posts.php");

}elseif(isset($_POST["post-update"])){
    $id = $_GET["id"];
    $title = $_POST["post-title"];
    $img = basename($_FILES["post-img"]["name"]);
    $tmp_name = $_FILES["post-img"]["tmp_name"];
    $content = $_POST["post-content"];

    if($img){
        $folder = "img/posts/";
        $dir = $folder.$img;
    
        echo $dir;
    
        move_uploaded_file($tmp_name, $dir);
    }else{
	$dir = "img/posts/default_post.png";
	}

    if(!$title){
        $title = "Bez tytułu";
    }


    $post = new Post();
    $post -> updatePost($title, $dir, $content, $id);
    header("Location: manage_posts.php");
}

if(isset($_GET["action"]) && $_GET["action"] =="del"){
    $post = new Post();
    $post -> deletePost($_GET["id"]);
    header("Location: manage_posts.php");
}

?>
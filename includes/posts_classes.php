<?php

    class Post extends DatabaseHandler{
        
        public function getPosts(){

            $sql = "SELECT * FROM posts ORDER BY date DESC";

            $query = $this -> connect() -> prepare($sql);
            $query -> execute();
            $posts = $query -> fetchAll();

            return $posts;

        } 

        public function publishPost($title, $img, $content){

            $query = $this -> connect() -> prepare("INSERT INTO posts (title, img, content) VALUES (?,?, ?);");
            if(!$query -> execute(array($title, $img, $content))){
                echo "Nie udało się wstawić posta :(";
                exit();
            }else{
                echo "<script>alert('Dodano nowy post!')</script>";
            }
        }

        public function deletePost($id){
            $query = $this -> connect() -> prepare("DELETE FROM posts WHERE id = ?");
            if(!$query -> execute(array($id))){
                echo "Nie udało się usunąć posta :(";
                exit();
            }else{
                echo "<script>alert('Usunięto post!')</script>";
            }
        }

        public function editPost($id){
            $query = $this -> connect() -> prepare("SELECT * FROM posts WHERE id = ?;");
            if(!$query -> execute(array($id))){
                echo "Nie udało się pobrać danych posta :(";
                exit();
            }else{
                return $query -> fetch();
            }
        }

        public function updatePost($title, $img, $content, $id){
            $query = $this -> connect() -> prepare("UPDATE posts SET title = ?, img = ?, content = ? WHERE id = ?");
            if(!$query -> execute(array($title, $img, $content, $id))){
                echo "Nie udało się edytować posta :(";
                exit();
            }else{
                echo "<script>alert('Zaktualizowano post!')</script>";
            }
        }
        
    }

?>
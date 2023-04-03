<?php 

    class Register extends DatabaseHandler{
        
        protected function setUser($name, $login, $email, $passwd){
            $query = $this -> connect() -> prepare('INSERT INTO users (name, login, email, passwd) VALUES (?,?,?,?);');
            $passwdHash = password_hash($passwd, PASSWORD_DEFAULT);
            if(!$query -> execute(array($name, $login, $email, $passwdHash))){
                $query = null;
                header("location index.php?error=queryfailed");
                exit();
            }
            
            $query = null;
        }

        protected function checkUser($login, $email){
            $query = $this -> connect() -> prepare('SELECT users.id FROM users WHERE users.login = ? OR users.email = ?;');
            if(!$query -> execute(array($login, $email))){
                $query = null;
                header("location: index.php?error=queryfailed");
                exit();
            }

            $results;
            if($query -> rowCount() > 0){
                $results = false;
            }else{
                $results = true;
            }

            return $results;

        }
    }

?>
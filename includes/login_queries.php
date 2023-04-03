<?php 

    class Login extends DatabaseHandler{
        
        protected function getUser($login, $passwd){
            $query = $this -> connect() -> prepare("SELECT users.passwd FROM users WHERE users.login = ? OR users.email = ?;");
            
            if(!$query -> execute(array($login, $passwd))){
                $query = null;
                header("Location: index.php?error=queryfailed");
                exit();
            }

            if($query -> rowCount() == 0){
                $query = null;
                header("Location: index.php?error=usernotfound");
                exit();
            }

            $passwdHash = $query -> fetchAll(PDO::FETCH_ASSOC);
            $checkPasswd = password_verify($passwd, $passwdHash[0]["passwd"]);

            if(!$checkPasswd){
                $query = null;
                header("Location: index.php?error=wrongpassword");
                exit();
            }
            else{
                $query = $this -> connect() -> prepare("SELECT * FROM users WHERE users.login = ? OR users.email = ? AND users.passwd = ?;");
                
                if(!$query -> execute(array($login, $login, $passwd))){
                    $query = null;
                    header("Location: index.php?error=queryfailed");
                    exit();
                }
            }

            if($query -> rowCount() == 0){
                $query = null;
                header("Location: index.php?error=usernotfound");
                exit();
            }
            
            $user = $query -> fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION["userid"] = $user[0]["id"];
            $_SESSION["username"] = $user[0]["name"];
            $_SESSION["userlogin"] = $user[0]["login"];
            $_SESSION["isAdmin"] =  $user[0]["isAdmin"];

            $query = null;
        }

    }

?>
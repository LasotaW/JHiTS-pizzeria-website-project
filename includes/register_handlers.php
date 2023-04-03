<?php

    class RegisterHandlers extends Register{
       

        private $login;
        private $passwd;
        private $repasswd;
        private $email;

        public function __construct($login, $name, $email, $passwd, $repasswd){
            $this -> login = $login;
            $this -> name = $name;
            $this -> passwd = $passwd;
            $this -> repasswd = $repasswd;
            $this -> email = $email;
        }

        public function registerUser(){
            if($this -> emptyInput() == false){
                echo "Pola nie mogą być puste";
                header("Location: index.php?error=emptyinput");
                exit();
            }
            if($this -> invalidLogin() == false){
                echo "Nieprawidłowy login";
                header("Location: index.php?error=username");
                exit();
            }
            if($this -> invalidEmail() == false){
                echo "Nieprawidłowy email";
                header("Location: index.php?error=email");
                exit();
            }
            if($this -> passwdMatch() == false){
                echo "Hasła się nie zgadzają";
                header("Location: index.php?error=passwdmatch");
                exit();
            }
            if($this -> invalidUser() == false){
                echo "Użytkownik o takim loginie lub emailu już istnieje";
                header("Location: index.php?error=invaliduser");
                exit();
            }

            $this -> setUser($this -> name, $this -> login, $this -> email, $this -> passwd);
        }

        private function emptyInput(){
            $result;
            if(empty($this -> login) || empty($this -> passwd) || empty($this -> repasswd) || empty($this -> email)){
                $result = false;
            }else{
                $result = true;
            }
            return $result;
        }

        private function invalidLogin(){
            $result;
            if(!preg_match("/^[a-zA-Z0-9]*$/", $this -> login)){
                $result = false;
            }else{
                $result = true;
            }
            return $result;
        }

        private function invalidEmail(){
            $result;
            if(!filter_var($this -> email, FILTER_VALIDATE_EMAIL)){
                $result = false;
            }else{
                $result = true;
            }
            return $result;
        }

        private function passwdMatch(){
            $result;
            if($this -> passwd !== $this -> repasswd){
                $result = false;
            }else{
                $result = true;
            }
            return $result;
        }

        private function invalidUser(){
            $result;
            if(!$this -> checkUser($this -> login, $this -> email)){
                $result = false;
            }else{
                $result = true;
            }
            return $result;
        }
    }

?>
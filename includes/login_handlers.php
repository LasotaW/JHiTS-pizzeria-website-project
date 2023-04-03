<?php

    class LoginHandlers extends Login{
        private $login;
        private $passwd;

        public function __construct($login, $passwd){
            $this -> login = $login;
            $this -> passwd = $passwd;
        }

        public function loginUser(){
            if($this -> emptyInput() == false){
                echo "Pola nie mogą być puste";
                header("Location: index.php?error=emptyinput");
                exit();
            }

            $this -> getUser($this -> login, $this -> passwd);
        }

        private function emptyInput(){
            $result;
            if(empty($this -> login) || empty($this -> passwd)){
                $result = false;
            }else{
                $result = true;
            }
            return $result;
        }
    }
?>
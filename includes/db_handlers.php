<?php

    class DatabaseHandler{
        protected function connect(){
            try{
                $user = 'wiktor.lasota1';
                $passwd = 'myarzBxsql';
                $dbConn = new PDO('mysql:host=localhost;dbname=wiktor.lasota1',$user, $passwd);
                return $dbConn;
            }
            catch(PDOException $e){
                echo "Błąd połączenia z bazą: ". $e ->getMessage()."<br>";
                die();
            }
        }
    }

?>
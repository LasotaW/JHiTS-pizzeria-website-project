<?php

class Opinion extends DatabaseHandler{
    
    
    public function publishOpinion($rate, $content, $userId){

        if(!$this -> userHasOpinion($userId)){
            $query = $this -> connect() -> prepare("INSERT INTO opinions (rate, content, user_id) VALUES (?,?,?)");

            if(!$query -> execute(array($rate, $content, $userId))){
                echo "Nie udało się zamieścić opinii :(";
                exit();
            }else{
                echo "Pomyślnie dodano opinię!";
            }
        }else{
            echo "Już dodałeś swoją opinię!";
        }
    }

    private function userHasOpinion($userId){
        $result;
        $q = $this -> connect() -> prepare("SELECT * FROM opinions WHERE user_id = ?");
        $q -> execute(array($userId));
        
        if($q -> fetch()){
            $result = true;
        }else{
            $result = false;
        }
        
        return $result;
    }

}

?>
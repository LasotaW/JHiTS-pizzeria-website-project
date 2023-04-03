
<?php

    class Product extends DatabaseHandler{
        
        public function getProducts($limit = 0){
            if($limit){
                $sql = "SELECT * FROM products ORDER BY price_sm LIMIT".$limit.";";
            }else{
                $sql = "SELECT * FROM products ORDER BY price_sm ";
            }

            $query = $this -> connect() -> prepare($sql);
            $query -> execute();
            $products = $query -> fetchAll();

            return $products;

        } 

        public function publishProduct($name, $desc, $dir, $priceSm, $priceMd, $priceLg){
            $q = "INSERT INTO products (name, desc, img, price_sm, price_md, price_lg) VALUES (".$name.",".$desc.",".$dir.",".$priceSm.",".$priceMd.",".$priceLg.");";
            echo $q;
            $query = $this -> connect() -> prepare("INSERT INTO products (name, ingreds, img, price_sm, price_md, price_lg) VALUES (?,?,?,?,?,?);");
            if(!$query -> execute(array($name, $desc, $dir, $priceSm, $priceMd, $priceLg))){
                echo "Nie udało się wstawić produktu :(";
                exit();
            }else{
                echo "<script>alert('Dodano nowy produkt!')</script>";
            }
        }

        public function deleteProduct($id){
            $query = $this -> connect() -> prepare("DELETE FROM products WHERE id = ?");
            if(!$query -> execute(array($id))){
                echo "Nie udało się usunąć produktu :(";
                exit();
            }else{
                echo "<script>alert('Usunięto post!')</script>";
            }
        }

        public function editProduct($id){
            $query = $this -> connect() -> prepare("SELECT * FROM products WHERE id = ?;");
            if(!$query -> execute(array($id))){
                echo "Nie udało się pobrać danych produktu :(";
                exit();
            }else{
                return $query -> fetch();
            }
        }

        public function updateProduct($name, $desc, $dir, $priceSm, $priceMd, $priceLg, $id){
            $query = $this -> connect() -> prepare("UPDATE products SET name = ?, ingreds = ?, img = ?, price_sm = ?,price_md = ?,price_lg = ? WHERE id = ?");
            if(!$query -> execute(array($name, $desc, $dir, $priceSm, $priceMd, $priceLg, $id))){
                echo "Nie udało się edytować produktu :(";
                exit();
            }else{
                echo "<script>alert('Zaktualizowano produkt')</script>";
            }
    
        }
        
    }

?>

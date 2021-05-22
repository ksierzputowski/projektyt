<?php

class Database extends PDO {

    // this function is called everytime this class is instantiated		
    public function __construct() {
        parent::__construct(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME,
                DB_USER, DB_PASS);
    }

    public function getById(string $table, string $id) {
        $sth = $this->prepare("SELECT * FROM {$table} WHERE ID = {$id}");
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    //under sql command
    public function getProductsByCategoryId($id) {
        $sth = $this->prepare("SELECT products.name, products.price, products.path, 
            products.img, kategorie_products.category_id,
            kategorie.Name, product_id
from kategorie_products
INNER JOIN products
ON kategorie_products.product_id = products.id
INNER JOIN kategorie
ON kategorie_products.category_id = kategorie.ID
WHERE category_id = {$id}"
        );

        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProductByPath($id) {
        $sth = $this->prepare("SELECT products.name, products.price, products.path, products.description, products.symbol, products.img, kategorie_products.category_id, product_id, kategorie.Name 
from kategorie_products 
INNER JOIN products ON kategorie_products.product_id = products.id
INNER JOIN kategorie ON kategorie_products.category_id = kategorie.ID
WHERE product_id = {$id}"
        );

        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAll($table, $condition = null) {
        if ($condition) {
            $sth = $this->prepare("SELECT * FROM {$table}");
            $sth->execute();
            return $sth->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $sth = $this->prepare("SELECT * FROM {$table}");
            $sth->execute();
            return $sth->fetchAll(PDO::FETCH_ASSOC);
        }
    }
//insert products
    public function insertProducts($name, $price, $description, $symbol, $img) {
         
        session::init();
    $sth = $this->prepare("INSERT INTO products (name, price, 
        description, symbol, img)
        VALUES (:name, :price, :description, :symbol, :img)"
            
        );
  
    
       $sth->execute(['name' => $name,
              'price' => $price,
               'description' => $description,
               'symbol' => $symbol,
               'img' => $img]
               
               
               
               );
       
       
        return $sth->fetchAll(PDO::FETCH_ASSOC);
}

public function insertProductAndCategory($prod, $cat) {
   
       $sth = $this->prepare("INSERT INTO kategorie_products (product_id, category_id)
        VALUES (:product_id, :category_id)"
            
        );
      $sth->execute([':product_id' => $prod,
              ':category_id' => $cat]
              );
      return $sth->fetchAll(PDO::FETCH_ASSOC);
               
}


public function findProdAndCat() {
        $sth = $this->prepare("SELECT Name FROM kategorie UNION SELECT
            name FROM products");
          $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }
          



}





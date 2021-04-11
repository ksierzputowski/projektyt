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
        $sth = $this->prepare("
SELECT kategorie.ID = {$id}, kategorie.Name, products.name, products.price, products.quantity
from kategorie
INNER JOIN kategorie_products
ON kategorie.ID = kategorie_products.ID
INNER JOIN products
ON kategorie_products.id_products = products.id_products
         ");

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

}



/* sql query 

("
SELECT kategorie.ID = {$id}, kategorie.Name, products.name, products.price, products.quantity
from kategorie
INNER JOIN kategorie_products
ON kategorie.ID = kategorie_products.ID
INNER JOIN products
ON kategorie_products.id_products = products.id_products
         ");
 
 */
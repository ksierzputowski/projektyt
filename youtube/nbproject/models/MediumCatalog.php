<?php

class MediumCatalog extends Model {


 const TABLE_NAMES = 'products';
    public function __construct() {
        parent::__construct();
    }
   

    public function getProductsByCategoryId($id)
    {
        $result = $this->db->getProductsByCategoryId($id);
        return $result;
    }
     public function  getProductByIdAndPath($id, $path){
         $result = $this->db->getProductByPath($id, $path);
        return $result;
    }
    
    public function showProducts() {
        $result = $this->db->getProducts();
        return $result;
     
    }
     }

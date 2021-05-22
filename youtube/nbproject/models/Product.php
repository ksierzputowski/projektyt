<?php

class Product extends Model {

    public function __construct() {
        parent::__construct();
    }

   

 
    public function getProductByPath(string $id)
    {
        $result = $this->db->getProductByPath($id);
        return $result;
    }
}



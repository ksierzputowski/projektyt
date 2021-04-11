<?php

class Product extends Model {

    protected const TABLE_NAME1 = 'products';
    protected const TABLE_NAME2 = 'kategorie_products';
    public function __construct() {
        parent::__construct();
    }

    public function getProducts() {

        $result = $this->db->getAll(self::TABLE_NAME1);
        return $result;
    }
    
    public function getProductsByCategoryId($id)
    {
        $result = $this->db->getProductsByCategoryId(self::TABLE_NAME2, $id);
        return $result;
    }

}

<?php
class ShowProducts extends Model {

    protected const TABLE_NAMES = 'products';

    function __construct() {
        parent::__construct();
    }

    public function showProducts() {
        $result = $this->db->getAll(self::TABLE_NAMES);
        return $result;
     
    }
    
    public function findProdAndCat() {
          $result = $this->db->findProdAndCat();
          return $result;
    }
}
<?php

class InsertModel extends Model {

    const TABLE_NAMES = 'products';

    function __construct() {
        parent::__construct();
    }
 
  

    public function save($name, $price, $description, $symbol, $img) {



        $result = $this->db->insertProducts($name, $price, $description, $symbol, $img);
        return $result;
        
    
    }
    


}

<?php

class SortProductModel extends Model {

    protected const TABLE_NAMES = 'kategorie';

    function __construct() {
        parent::__construct();
    }
 
  

    public function search() {



        $result = $this->db->getAll(self::TABLE_NAMES);
        return $result;
        
    
    }

}

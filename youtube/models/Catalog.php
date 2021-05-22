<?php

class Catalog extends Model {

    protected const TABLE_NAME = 'kategorie';
    
    public function __construct() {
        parent::__construct();
    }

    public function getCategories() {

        $result = $this->db->getAll(self::TABLE_NAME);
        return $result;
    }
    
    public function getById($id)
    {
        $result = $this->db->getById(self::TABLE_NAME, $id);
        return $result;
    }
    
    

}

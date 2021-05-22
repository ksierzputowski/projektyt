<?php

class testModel extends Model {



    function __construct() {
        parent::__construct();
    }
 
  

    
    public function action($prod, $cat){
        $result = $this->db->insertProductAndCategory($prod, $cat);
        return $result;
    }

}

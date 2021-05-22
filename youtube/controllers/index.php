<?php


require 'models/ShowProducts.php';
class Index extends Controller{

    function __construct() {
        parent::__construct();
     
       
    }
   function index() {
      
           $product_av = new ShowProducts();
        $datass = $product_av->showProducts(); 
        
        
       
        $this->view->render('index/index', $datass);
   
    }
    function details() {
        echo ' jestem teraz w index/controller/details';
    }
}

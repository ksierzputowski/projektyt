<?php


require 'models/Product.php';

class Products extends Controller {

    function __construct() {
        parent::__construct();
        
    }
    
    
    function index() {
        $url = explode('/', $_GET['url']);
     
        $products = new Product();
        $name_producties = $products-> getProductByPath($url[4]);
      
        
        $this->view->render('products/view', $name_producties);
    }

    function run() {
        $this->model->run();
    }
   

}
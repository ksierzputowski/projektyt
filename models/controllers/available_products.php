<?php

require 'models/Product.php';

class Available_products extends Controller {

    function __construct() {
        parent::__construct();
        //echo 'jestem w katalogach w conntroles/katalogi';
        //$this->view->render('login/index');
        
    }

    function index() {

        $products = new Product();
        $name_product = $products->getProducts();
        $this->view->render('available_products/view', $name_product);
        
       
    }
    function run() {
        $this->model->run();
        
    }

}
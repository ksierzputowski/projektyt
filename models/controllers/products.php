<?php


require 'models/Product.php';

class Products extends Controller {

    function __construct() {
        parent::__construct();
        //echo 'jestem w katalogach w conntroles/katalogi';
        //$this->view->render('login/index');
    }
    function index() {
        $url = explode('/', $_GET['url']);
        $product = new Product();
        $name_producties = $product->getProductsByCategoryId($url[3]); //there is var dup error
        $this->view->render('products/view', $name_producties);
    }

    function run() {
        $this->model->run();
    }

}

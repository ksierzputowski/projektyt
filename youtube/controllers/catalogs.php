<?php

require 'models/MediumCatalog.php';
require 'models/Catalog.php';
require 'helper/helper.php';


class Catalogs extends Controller {

    function __construct() {
        parent::__construct();
        
    }
  


    function index() {
        $url = explode('/', $_GET['url']);
       

        $product = new MediumCatalog();
        $data = $product->getProductsByCategoryId($url[3]);
        $this->view->render('catalogs/view', $data);
    }

    function run() {
        $this->model->run();
    }

}

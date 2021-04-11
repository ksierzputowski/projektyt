<?php

require 'models/Catalog.php';

class Catalogs extends Controller {

    function __construct() {
        parent::__construct();
        //echo 'jestem w katalogach w conntroles/katalogi';
        //$this->view->render('login/index');
    }

    function index() {
        $url = explode('/', $_GET['url']);
        $catalog = new Catalog();
        $category = $catalog->getById($url[3]);// ['id' = 1, 'name' = 'Meskie Gino Rossi', 'path' = meskie'];
        $this->view->render('catalogs/view', $category);
    }

    function run() {
        $this->model->run();
    }

}

<?php
require 'models/Catalog.php';
require 'helper/helper.php';

class Katalogi extends Controller {

    function __construct() {
        parent::__construct();
        //echo 'jestem w katalogach w conntroles/katalogi';
        //$this->view->render('login/index');
        
    }

    function index() {
        $catalog = new Catalog();
        $categories = $catalog->getCategories();
        
        $this->view->render('katalogi/index', $categories);
        
    }
    function run() {
        $this->model->run();
        
    }

}
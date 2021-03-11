<?php

class Index extends Controller{

    function __construct() {
        parent::__construct();
        //echo 'jestem w indexie w conntroles/index';
        //$this->view->render('index/index');
    }
   function index() {
       echo 'jestem w indexie w /conntroles/index/index';
        $this->view->render('index/index');
    }
    function details() {
        echo ' jestem teraz w index/controller/details';
    }
}
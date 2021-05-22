<?php

class Erroor extends Controller{

    function __construct() {
        parent::__construct();
        //echo 'This is an error!';
        //$this->view->msg = 'This page doesnt exist';
        //$this->view->render('error/index');
    }
        function index() {
        $this->view->msg = 'This page doesnt exist';
        $this->view->render('error/index');
    }
}

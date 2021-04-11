<?php

class Login extends Controller {

    function __construct() {
        parent::__construct();
        //echo 'jestem w indexie w conntroles/index';
        //$this->view->render('login/index');
    }

    function index() {
        $this->view->render('login/index', []);
    }
    function run() {
        $this->model->run();
    }

}

<?php

class Dashboard extends Controller {

    function __construct() {
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn');
        if ($logged == false) {
            Session::destroy();
            header('location: ../login');
            exit;
        }
        //echo 'jestem w indexie w conntroles/index';
        //$this->view->render('login/index');
    }

    function index() {
        $this->view->render('dashboard/index', []);
    }

    function logout() {
        Session::destroy();
        header('location: ../login');
        exit;
    }
}

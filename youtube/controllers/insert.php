<?php

require 'controllers/index.php';

class Insert extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {

        $this->view->render('insert/index', []);
        if (isset($_POST['submit'])) {
            if (!empty($_POST['name']) && !empty($_POST['price']) && !empty($_POST['description']) && !empty($_POST['symbol']) && !empty($_POST['img'])) {



                $name = $_POST['name'];
                $price = $_POST['price'];
                $description = $_POST['description'];
                $symbol = $_POST['symbol'];
                $img = $_POST['img'];





                $helpi = new InsertModel();
                $helps = $helpi->save($name, $price, $description, $symbol, $img);
                header('location: ../index');
            } else {

                header('location: ../insert');
            }
        }
    }

}

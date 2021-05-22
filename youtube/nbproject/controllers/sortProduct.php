<?php

require 'models/ShowProducts.php';
require 'models/testModel.php';

class SortProduct extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {



        $sorts = new ShowProducts();
        $sorting = $sorts->showProducts();




        $this->view->render('sortProduct/view', $sorting);
    }

    function run() {

        $this->view->render('sortProduct/view', []);

        if (isset($_POST['submit'])) {
            if (!empty($_POST['product_id']) && !empty($_POST['category_id'])) {


                $prod = $_POST['product_id'];
              
                $cat = $_POST['category_id'];
                




                $add = new testModel();
                $adding = $add->action($prod, $cat);
                   header('location: ../katalogi');
            } else {

                header('location: ../sortProduct');
           
            }
        }
    }

}

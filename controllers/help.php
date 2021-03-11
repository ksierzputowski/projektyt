<?php

class Help extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    function index() {
        $this->view->render('help/index');
        //echo 'jestem teraz w controllers/help class</br>'; 
        /* jak wpiszemy http://localhost/youtube/help 
         * to przenosi nas w i robi powyższe echo */
    }

    //nazwa funkcji poniżej definiuje de facto url; -> teraz wyglada to tak http://localhost/youtube/help/other/toej
    public function other($arg = false) {
        //echo 'jestem teraz w other</br>';
        //echo 'Optional: ' .$arg . '</br>';

        require 'models/help_model.php';
        $model = new Help_Model();
        $this->view->blah = $model->blah();
    }

}

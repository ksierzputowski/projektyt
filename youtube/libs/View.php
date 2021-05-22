<?php

class View {

    function __construct() {
        //echo 'This is the view</br>';
    }

    public function render($name, array $data, $empty = false) {
        if ($empty == true) {
            require 'views/' . $name . '.php';
        } else {
            require 'views/header.php';
            require 'views/' . $name . '.php';
         
    }

}
}




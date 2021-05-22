<?php

class Bootstrap {

    function __construct() {
        /* $url = $_GET['url']; /* dzięki temu po wspianiu echo $url wyskoczy na ekranie to 
         * co wpisalismy w urlu po http://localhost/youtube/ocotuchodzi - w tym wypadku ocotuchodzi  */
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        //print_r($url);
        /* ta sekwencja sprawia, to, że gdy wyprintujemy http://localhost/youtube/help/inne pojawia sie nam na ekranie 
         * Array ( [0] => help [1] => inne ) */

        if (empty($url[0])) {
            require 'controllers/index.php';
            $controller = new Index();
            $controller->index();
            return false;
            /* dzieki temu, jeżeli nic nie ma po http://localhost/youtube/ 
             * requairuje nas do  indexa w conntroles/index */
        }
        
        
        
        $file = 'controllers/' . $url[0] . '.php';
        if (file_exists($file)) {
            require $file;
        } else {
            require 'controllers/erroor.php';
            $controller = new Erroor();
            return false;
            /* throw new Exception("The file: $file does not exist."); dzieki temu, jezeli warunek jest 
             * false wyskakuje nam fatal error o tresci: Uncaught Exception: The file: controllers/nirhelp.php does not exist. 
             */
        }
        
        
        
        
        $controller = new $url[0]; //nie wiem jak ale to przenosi do views index przez constructora
        $controller->loadModel($url[0]);
        //calling methods
        if (isset($url[2])) {
            if (method_exists($controller, $url[1])) {
                $controller->{$url[1]}($url[2]);
            } else {
                echo 'potezny blad';
            }
        } else {
            if (isset($url[1])) {
                $controller->{$url[1]}();
                return false;
            } else {
                $controller->index();
            }
        }
    }

}

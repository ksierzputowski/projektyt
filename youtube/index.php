<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

//use autoloader byczqu
require 'libs/Bootstrap.php';//trzeba to zrequairowac, bo inaczej instancja poniżej nie ruszy
require 'libs/Controller.php';
require 'libs/Model.php';
require 'libs/View.php';

//library
require 'libs/Database.php';
require 'libs/Session.php';

require 'config/paths.php';
require 'config/database.php';

$app = new Bootstrap(); //w tym miejsciu robie instancje pliku bootstrap zeby zadzialal


